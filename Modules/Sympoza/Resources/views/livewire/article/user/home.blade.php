<div>
    <div class="row row-cols-1 row-cols-md-1">
        @foreach($articles as $article)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <button wire:click="$emit('getArticle', {{$article->id}})" class="btn btn-xs btn-warning"><i class="fa fa-edit fa-xs" style ="color:black" aria-hidden="true"></i> Edit wire</button>
                        <a href="{{ route('sympoza.user.article-submission.edit', $article->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-edit fa-xs" style ="color:black" aria-hidden="true"></i> Edit2</a>
                        <a href="#" class="badge bg-danger float-right mr-2"><i class="fas fa-file-pdf"></i>  Download</a>
                        <p class="card-text">{{$article->author_desc}}</p>
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
