 @extends('layout')
 @section('title', 'Contacto')
 @section('content')
     <div class="container">
         <div class="row">
             <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form
                    class = "bg-white shadow rounded py-3 px-4"
                    method = 'POST'
                    action = "{{route('messages.store')}}">
                    @csrf
                    <h1 class="display-4">Contacto</h1>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input
                            class = "form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                            id = "name"
                            type='text'
                            name= 'name'
                            placeholder = 'Nombre...'
                            value = "{{ old('name')}}"
                        >
                        @error('name')
                            <spam class = "invalid-feedback" role="alert">
                                <strong>{{ $message}} </strong>
                            </spam>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            class = "form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                            id = "email"
                            type='email'
                            name= 'email'
                            placeholder = 'Email...'
                            value = "{{ old('email')}}"
                        >
                        @error('email')
                            <spam class = "invalid-feedback" role="alert">
                                <strong>{{ $message}} </strong>
                            </spam>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <input
                            class = "form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                            id = "asunto"
                            type='text'
                            name= 'subject'
                            placeholder = 'Asunto...'
                            value = "{{ old('subject')}}"
                        >
                        @error('asunto')
                            <spam class = "invalid-feedback" role="alert">
                                <strong>{{ $message}} </strong>
                            </spam>
                        @enderror
                    </div>
                    <textarea
                        class = "form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
                        name="content"
                        placeholder = 'Mensaje...'
                        id=""
                        cols="30"
                        rows="5"
                        value = "{{ old('content')}}">
                    </textarea>
                    @error('content')
                            <spam class = "invalid-feedback" role="alert">
                                <strong>{{ $message}} </strong>
                            </spam>
                     @enderror

                    <button
                        class = "btn btn-primary btn-lg btn-block">
                        Enviar
                    </button>
                </form>

             </div>
         </div>

     </div>
 @endsection
