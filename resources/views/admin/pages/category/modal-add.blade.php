<div class="form-group">
    <div class="form-group">
        <label for="input-id">ID: </label>
        <input type="text" class="form-control" id="input-id" value="{{ $categoryItem->id }}" readonly>
    </div>
    <div class="form-group">
        <label for="input-name">Name: </label>
        <input type="text" class="form-control" id="input-name" value="{{ $categoryItem->name }}" required>
    </div>
    <div class="form-group">
        <label for="sl-parent-category">Parent Category: </label>
        <select class="form-control" id="sl-parent-category">
            <option value="0" {{ $categoryItem->parent_id == 0 ? 'selected' : '' }}>No</option>
            @foreach($categoryList as $item)
            <option value="{{ $item->id }}" {{ $categoryItem->parent_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>