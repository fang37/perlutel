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
                            <div class="text-danger h-30 align-top">*format .pdf</div>
                            <input type="file" class="form-control-file" wire:model="file" id="exampleFormControlFile1">
                            @error('file') <span class="error">{{ $message }}</span> @enderror
                            <div wire:loading wire:target="file">Uploading...</div>
                        </div>
                    </div>
            </div>
                <button type="button" wire:click.prevent="editSubmission({{$article->id}})" class="btn btn-success btn-md float-right" ><i class="fas fa-paper-plane"></i> Update</button>
                <a href="/sympoza/article-submission" class="btn text-white btn-warning btn-md float-right mr-2"  data-toggle="modal" data-target="#cancelModal" >Cancel</a>
            
            <!-- Modal -->
            <div wire:ignore.self class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="cancelModalLabel">Cancel Confirm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                       <div class="modal-body">
                            <p>Are you sure want to cancel edit submission ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">No</button>
                            <button type="button" wire:click.prevent="cancel()" class="btn btn-danger close-modal" data-dismiss="modal">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
