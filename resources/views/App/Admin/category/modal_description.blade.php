<!-- Modal -->
<div class="modal fade" id="category_description-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br>
                <p class="text-justify">
                    {{$cat->description}}
                </p>

            </div>

        </div>
    </div>
</div>
