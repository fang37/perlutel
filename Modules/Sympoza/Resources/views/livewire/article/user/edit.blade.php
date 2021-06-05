<div>
    {{-- livewire view --}}
    @include('sympoza::livewire.alert.success')
    @include('sympoza::livewire.alert.error')
<!-- //////////////////////////////// -->
            <div class="card-header">
                <h4 class="" id="addUserModalLabel"><strong>Article Information</strong></h4>
            </div>
            <div class="card-body">
                <div>
                    <!-- <input type="hidden" wire:model="article"> -->
                    <div class="row">
                        <div class="col-md-2 offset-md-0">
                            <label for="title">Title</label>
                        </div>
                        <div class="col-md-10 offset-md-0">
                            <div class="form-group">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title" id="title" placeholder="Enter Title" name="title">
                                @error('title')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 offset-md-0">
                            <label for="abstract">Abstract</label>
                        </div>
                        <div class="col-md-10 offset-md-0">
                            <div class="form-group">
                                <textarea type="text" class="form-control @error('abstract') is-invalid @enderror" wire:model="abstract" id="abstract" placeholder="Enter Abstract" name="abstract">
                                @error('abstract')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
                                @enderror
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 offset-md-0">
                            <label for="keyword">Keyword</label>
                        </div>
                        <div class="col-md-10 offset-md-0">
                            <div class="form-group">
                                <textarea type="text" class="form-control @error('keyword') is-invalid @enderror" wire:model="keyword" id="keyword" placeholder="Enter Keyword" name="keyword">
                                @error('keyword')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
                                @enderror
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="">
                            <label for="exampleFormControlFile1">Article Upload</label>
                            <input type="file" class="form-control-file" wire:model="file" id="exampleFormControlFile1">
                            @error('file') <span class="error">{{ $message }}</span> @enderror
                            <div wire:loading wire:target="file">Uploading...</div>
                        </div>
                    </div>
            </div>
                <button type="button" wire:click.prevent="editSubmission({{$article->id}})" class="btn btn-success btn-md float-right" ><i class="fas fa-paper-plane"></i> Update</button>
        
    </div>
