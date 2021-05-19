<h1></h1>
<form method="post" action="{{ route('updatmemo',['id' => $edit_memo->id]) }}">
    @method('patch')
    @csrf
    <p>
        <label for="title">Title</label><br>
        <input type="text" name="name" value="{{ $edit_memo->name }}">
    </p>
    <p>
        <select name="category_id" id="category-id" class="form-control" required>
            <option value="">カテゴリを選択</option>
            @php
            foreach ($categories as $category) {
            echo "<option value=\"" . $category->id . "\">" . $category->name . "</option>";
            }
            @endphp
        </select>
    </p>
    <p>
        <label for="description">Description</label><br>
        <textarea cols="50" rows="5" name="description"> {{ $edit_memo->description }}</textarea>
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form>