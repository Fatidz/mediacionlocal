

@include('Mediador.app')
@section('content')

<div class="row conteiner justify-content-center">
    <div class="col align-baseline p-5">
        <img src="{{ asset('images/CEMARC.svg')}}" alt="Logo"  >
    </div>

    <div class="col align-baseline p-5  m-5">
        <form>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="d-grid gap-2 mx-auto" >
            <button type="submit" class="btn btn-primary" style="background-color: #304D73;">Ingresar</button>
            </div>
        </form>
    </div>
 
</div>