<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTeacherRequest;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Room;
use App\Teacher;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('teacher_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Teacher::with(['room'])->select(sprintf('%s.*', (new Teacher)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'teacher_show';
                $editGate      = 'teacher_edit';
                $deleteGate    = 'teacher_delete';
                $crudRoutePart = 'teachers';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });
            $table->editColumn('whatsapp', function ($row) {
                return $row->whatsapp ? $row->whatsapp : "";
            });
            $table->editColumn('alamat', function ($row) {
                return $row->alamat ? $row->alamat : "";
            });
            $table->addColumn('room_name', function ($row) {
                return $row->room ? $row->room->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'room']);

            return $table->make(true);
        }

        return view('admin.teachers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('teacher_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rooms = Room::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.teachers.create', compact('rooms'));
    }

    public function store(StoreTeacherRequest $request)
    {
        $teacher = Teacher::create($request->all());

        return redirect()->route('admin.teachers.index');
    }

    public function edit(Teacher $teacher)
    {
        abort_if(Gate::denies('teacher_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rooms = Room::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $teacher->load('room');

        return view('admin.teachers.edit', compact('rooms', 'teacher'));
    }

    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $teacher->update($request->all());

        return redirect()->route('admin.teachers.index');
    }

    public function show(Teacher $teacher)
    {
        abort_if(Gate::denies('teacher_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teacher->load('room', 'teacherSchedules');

        return view('admin.teachers.show', compact('teacher'));
    }       

    public function destroy(Teacher $teacher)
    {
        abort_if(Gate::denies('teacher_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teacher->delete();

        return back();
    }

    public function massDestroy(MassDestroyTeacherRequest $request)
    {
        Teacher::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}