<div>
    @include('sympoza::livewire.alert.success')
    @include('sympoza::livewire.alert.error')     
        <div class="card-header">
            <h4 class="" id="addUserModalLabel"><strong>Author Information</strong></h4>
        </div>
        
            <div class="card-body">
                @for($i = 0; $i<$authorIndexs; $i++)
                    <div>
                        <div class="row">
                            <div class="col-md offset-md-0">
                                <h5 class=""><strong>AUTHOR {{$i+1}}</strong></h5>
                            </div>
                            <div class="align-self-end ml-auto">       
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-2 offset-md-0">
                                <label for="name.{{$i+1}}">Name</label>
                            </div>
                            <div class="col-md-10 offset-md-0">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name.'.($i+1)) is-invalid @enderror" wire:model="name.{{$i+1}}" id="name.{{$i+1}}" placeholder="Enter Name" name="name.{{$i+1}}">
                                    @error('name.'.($i+1))<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 offset-md-0">
                                <label for="nim.{{$i+1}}">NIM</label>
                            </div>
                            <div class="col-md-10 offset-md-0">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nim.'.($i+1)) is-invalid @enderror" wire:model="nim.{{$i+1}}" id="nim.{{$i+1}}" placeholder="Enter NIM" name="nim.{{$i+1}}">
                                    @error('nim.'.($i+1))<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 offset-md-0">
                                <label for="email.{{$i+1}}">Email</label>
                            </div>
                            <div class="col-md-10 offset-md-0">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('email.'.($i+1)) is-invalid @enderror" wire:model="email.{{$i+1}}" id="email.{{$i+1}}" placeholder="example@upi.edu" name="email.{{$i+1}}">
                                    @error('email.'.($i+1))<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 offset-md-0">
                                <label for="faculty.{{$i+1}}">Faculty</label>
                            </div>
                            <div class="col-md-10 offset-md-0">
                                <div class="form-group">
                                    <select id="faculty.{{$i+1}}" wire:model="faculty.{{$i+1}}" class="form-control @error('faculty.'.($i+1)) is-invalid @enderror">
                                        <option selected>Choose...</option>
                                        <option>FPTK</option>
                                        <option>FPMIPA</option>
                                        <option>FIP</option>
                                    </select>
                                    
                                    <!-- <input type="text" class="form-control" id="faculty" placeholder="Enter Faculty" name="faculty"> -->
                                    <!-- @error('faculty') <span class="text-danger">{{ $message }}</span>@enderror -->
                                </div>
                            </div>
                        </div>
                @endfor
                        <div class="row mr-1 justify-content-end">
                            <button class="btn btn-sm btn-danger mr-2" wire:click="removeAuthor">
                                <i class="fas fa-minus-circle"></i> Remove Author
                            </button>
                            <button class="btn btn-sm btn-warning" wire:click="addAuthor">
                                <i class="fas fa-plus-circle"></i> Add Author
                            </button>
                        </div>
            </div>
            

<!-- //////////////////////////////// -->

            <div class="card-header">
                <h4 class="" id="addUserModalLabel"><strong>Article Information</strong></h4>
            </div>
            <div class="card-body">
                <div>

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
                            <input type="file" class="form-control-file" wire:model="link" id="exampleFormControlFile1">
                        </div>
                    </div>
            </div>
                <button type="button" wire:click.prevent="createSubmission" class="btn btn-success btn-md float-right" ><i class="fas fa-paper-plane"></i> Submit</button>
        
    </div>
