<div>
    <div class="row row-cols-1 row-cols-md-1">
        @foreach($articles as $article)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{$article->title}}</b></h5>
                        <a href="" wire:click="download('{{ $article->link }}')" class="badge bg-info ml-2"><i class="fas fa-file-pdf" aria-hidden="true"></i>  Download</a>
                        <a href="{{ route('sympoza.user.article-submission.edit', $article->id) }}" class="badge bg-warning float-right"> <i class="fa fa-edit fa-xs" style ="color:black" aria-hidden="true"></i> Edit</a>
                        <p class="card-text">{{$article->author_desc}}</p>
                        <!-- <a href="#" wire:click="$emit('addAuthorComponent')">modal</a> -->
                        <a data-toggle="collapse" href="#collapseAbstract{{$loop->index}}" role="button" aria-expanded="false" aria-controls="collapseAbstract">
                            Abstract
                        </a>
                        <a href="" wire:click="deleteId('{{ $article->id }}')" class="badge bg-danger float-right" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt" aria-hidden="true"></i>  Delete</a>
                        <div class="collapse" id="collapseAbstract{{$loop->index}}">
                        <div class="card card-body">
                            {{$article->abstract}}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Modal -->
             <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Confirm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                       <div class="modal-body">
                            <p>Are you sure want to delete submission <br> <b>{{$article->title}}</b> ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cancel</button>
                            <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>