<x-template>
    
    <div class="card-body p-md-5 shadow">
        <div class="row">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                
                <p class="text-center h1 fw-bold mb-5 mt-4">Registrati</p>
                
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    @method('POST')
                    
                    
                    
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    {{-- Input Name  --}}
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="name">Nome e Cognome</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"  placeholder="Mario Rossi">
                            <div class="form-notch"><div class="form-notch-leading"></div><div class="form-notch-middle"></div><div class="form-notch-trailing"></div></div></div>
                            @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        
                        
                        {{-- Input Email --}}
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example3c">Email</label>
                                <input type="email" name="email" id="email" class="form-control"  placeholder="name@example.com">
                                <div class="form-notch"><div class="form-notch-leading"></div><div class="form-notch-middle"></div><div class="form-notch-trailing"></div></div></div>
                                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            
                            {{-- Input Password --}}
                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="**********">
                                    <div class="form-notch"><div class="form-notch-leading"></div><div class="form-notch-middle"></div><div class="form-notch-trailing"></div></div></div>
                                    @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                                </div>
                                
                                
                                {{-- Input Password Confirmation --}}
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <div class="form-outline flex-fill mb-0">
                                        <label class="form-label" for="password_confimation">Conferma la Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="**********">
                                        <div class="form-notch"><div class="form-notch-leading"></div><div class="form-notch-middle"></div><div class="form-notch-trailing"></div></div></div>
                                        @error('password_confimation') <span class="small text-danger">{{ $message }}</span> @enderror
                                    </div>
                                           
                                    <div class="container">  
                                        <div class="d-grid my-3">
                                            <button type="submit" class="btn-user fw-bold py-2" style="">Registrati</button>
                                        </div>
                                        <div class="d-grid">       
                                            <a href="{{route('login')}}" class="btn-user fw-bold py-2 text-center" style="">Sei già registrato?</a>
                                        </div>                                        
                                    </div>                                   
                                </form>      
                            </div>
                        </div>
                    </div>
                    
                </x-template>