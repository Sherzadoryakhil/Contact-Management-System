<form action="{{ $action }}" method="POST" style="display: inline">
    @csrf
    @method("delete")
    <button type="submit" class="btn btn-sm btn-circle btn-outline-info" title="Delete"><i class="fa fa-undo"></i></button>
</form>