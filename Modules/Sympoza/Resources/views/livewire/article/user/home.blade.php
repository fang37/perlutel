<div>
    <div class="row row-cols-1 row-cols-md-1">
        @foreach($articles as $article)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{$article->title}}</b></h5>
                        <a href="{{ route('sympoza.user.article-submission.edit', $article->id) }}" class="badge bg-xs bg-warning ml-2"><i class="fa fa-edit fa-xs" style ="color:black" aria-hidden="true"></i> Edit</a>
                        <a wire:click="download('{{ $article->link }}')" class="badge bg-danger float-right mr-2"><i class="fas fa-file-pdf"></i>  Download</a>
                        <p class="card-text">{{$article->author_desc}}</p>
                        <!-- <a href="#" wire:click="$emit('addAuthorComponent')">modal</a> -->
                        <a data-toggle="collapse" href="#collapseAbstract{{$loop->index}}" role="button" aria-expanded="false" aria-controls="collapseAbstract">
                            Abstract
                        </a>
                        
                    
                        <div class="collapse" id="collapseAbstract{{$loop->index}}">
                        <div class="card card-body">
                            {{$article->abstract}}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>