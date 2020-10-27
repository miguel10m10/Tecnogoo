<div class="content" href="#contacto" id="contacto">
   <div class="row">
     <div class="col-md-12">
       <div class="card card-user">
         <div class="title-contact">
           <h2>Contacto</h2>
         </div>
          <form class="form-contact" method="POST" action="{{route('welcome.store')}}" novalidate>
             {{csrf_field()}}
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <label>Nombre</label>
                   <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Ingresa tu nombre" name="name" value="{{old('name')}}">
                   @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             <div class="col-md-12">
               <div class="form-group">
                   <label>E-mail</label>
                   <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Ingresa tu e-mail" name="email" value="{{old('email')}}">
                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>   
             <div class="col-md-12">
                <div class="form-group">
                   <label>Número de teléfono</label>
                   <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Ingresa tu número de teléfono" name="phone_number" value="{{old('phone_number')}}">
                   @error('phone_number')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <div class="col-md-12">
                 <div class="form-group">
                   <label>Asunto</label>
                   <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Ingresa el asunto" name="subject" value="{{old('subject')}}">
                   @error('subject')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <div class="col-md-12">
                <div class="form-group">
                   <label>Mensaje</label>
                   <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Ingresa el mensaje" name="message">{{ old('message') }}</textarea>
                   @error('message')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             </div>
             <div class="row">
              <div class="update ml-auto mr-auto">
                 <button class="btn-send-contact" type="submit" class="btn btn-primary btn-round">Enviar</button>
               </div>
             </div>
           <div class="card-body">
            @if(Session::has('success'))
               <div class="alert alert-success">
                 {{ Session::get('success') }}
                </div>
            @endif
         </div>
        </form>
       </div>
     </div>
   </div>
</div>