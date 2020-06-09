@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.teacher.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.teachers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.id') }}
                        </th>
                        <td>
                            {{ $teacher->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.name') }}
                        </th>
                        <td>
                            {{ $teacher->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.email') }}
                        </th>
                        <td>
                            {{ $teacher->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.whatsapp') }}
                        </th>
                        <td>
                            {{ $teacher->whatsapp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.alamat') }}
                        </th>
                        <td>
                            {{ $teacher->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.room') }}
                        </th>
                        <td>
                            {{ $teacher->room->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.teachers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#teacher_schedules" role="tab" data-toggle="tab">
                {{ trans('cruds.schedule.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="teacher_schedules">
            @includeIf('admin.teachers.relationships.teacherSchedules', ['schedules' => $teacher->teacherSchedules])
        </div>
    </div>
</div>

@endsection