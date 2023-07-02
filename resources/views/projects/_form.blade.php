@csrf
 <div class="input-group mb-3">
     <input name = "image" type="file" class="form-control" id="inputGroupFile02">
     <label class="input-group-text" for="inputGroupFile02">Upload</label>
 </div>

 <div class = "form-group">
     <label for="title">Titulo del proyecto</label>
     <input
         class = "form-control border-0 bg-light shadow-sm"
         placeholder = "Título"
         type = "text"
         id = "title"
         name = "title"
         value = "{{ old('title', $project->title) }}"
     >
 </div>
 <div class = "form-group">
     <label for="url">Url del proyecto</label>
     <input
         class = "form-control  border-0 bg-light shadow-sm"
         placeholder = "Url"
         type = "text"
         id = "url"
         name = "url"
         value = "{{ old('url', $project->url) }}"
     >
</div>
<div class = "form-group">
     <label for="description">Descripción del proyecto</label>
     <textarea
         class = "form-control border-0 bg-light shadow-sm"
         placeholder = "Descripción"
         cols = "30"
         rows = "10"
         name = "description">
         {{ old('url', $project->description) }}
     </textarea>
</dvi>
<button class = "btn btn-primary btn-lg btn-block">
     {{$btnText}}
</button>
<a
     class = "btn btn-link btn-block"
         href="{{ route('projects.index')}}">Cancelar
</a>
