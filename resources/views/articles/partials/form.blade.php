@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}">           
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" id="content" class="form-control" rows="10">{{ $article->content }}</textarea>     
</div>
<button type="submit" class="btn btn-warning">{{ $submit }}</button>