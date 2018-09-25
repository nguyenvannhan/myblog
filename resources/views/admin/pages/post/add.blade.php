@extends('admin.layouts.master')

@section('content')
<div class="py-3">
    <form action="{{ route('post_add_post_admin_route') }}" method="POST">
        @csrf
        <div class="form-group">
            <input class="form-control" placeholder="Title" name="name" value="">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control select2" id="category" name="category_id[]" multiple="multiple">
                @foreach($categoryList as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <textarea name="content" id="mdeditor" rows="50"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="float-right btn btn-primary ml-3">
                Save Post
            </button>
            <button type="submit" class="float-right btn btn-outline-primary">
                Save as Draft
            </button>
        </div>
    </form>
</div>
@stop

@section('scripts')
<script>
    $(document).ready(function() {
        var md = new MdEditor('#mdeditor', {
            uploader: base_url + '/admin/post/add',
            preview: true
        });
    });
</script>
@stop