@extends('layouts.master')

@push('page_title')
Create Role
@endpush

@section('main-content')
<div class="main-content">
    <div class="breadcrumb">
        <h1>Dashboard</h1>
        <ul>
            <li><a href="href">Roles</a></li>
            <li>Create</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form name="create-role" action="{{ route('roles.store') }}" method="POST" class="needs-validation"
                        novalidate="novalidate">
                        @csrf
                        <div class="form-group">
                            <label>Role Name <span class="required">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Role Name" required>
                            @if($errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @endif
                            <div class="invalid-feedback">
                                Please provide a Role.
                            </div>
                        </div>
                        <div class="row pr-2 pl-2 pb-4">
                            <div class="col-md-12 m-0">
                                <label class="m-0"><i class="fa fa-check-circle"></i> Select Permission for
                                    this role</label>
                                @if($errors->has('permissions'))
                                <div class="invalid-feedback mx-auto">{{ $errors->first('permissions') }}</div>
                                @endif
                                <hr />
                            </div>

                            @foreach ($permission_categories->chunk(3) as $permission_category_chunk)
                            <hr />
                            @foreach ($permission_category_chunk as $permission_category)
                            <div class="col-md-4 pl-5 pb-4">
                                <label class="mb-0 text-lowercase"
                                    style="letter-spacing: 0.03em; font-size: 1.1em; color: #000000; !important; font-variant: small-caps;">{{ $permission_category->name }}</label>
                                <hr class="mt-0 mb-1">
                                @foreach ($permission_category->permissions as $permission)
                                <div class="custom-checkbox custom-control permission-div">
                                    <input type="checkbox" data-checkboxes="mygroup"
                                        class="permission-select custom-control-input" name="permissions[]"
                                        id="{{ $permission->name }}" data-permission-id="{{ $permission->id }}"
                                        value="{{ $permission->id }}">
                                    <label for="{{ $permission->name }}" class="custom-control-label"
                                        onmouseover="this.style.cursor='pointer'">
                                        {{ ucwords(str_replace('-', ' ',$permission->name)) }}
                                    </label>
                                </div>
                                @endforeach
                                <br />
                            </div>
                            @endforeach
                            @endforeach
                        </div>
                        <hr />
                        <div class="col-md-12 p-5">
                            <button type="submit" class="btn btn-sm btn-success pull-right"
                                style="margin-left:3px;">Create</button>
                            <a href="{{ route('roles.index') }}" type="submit"
                                class="btn btn-sm btn-danger pull-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection