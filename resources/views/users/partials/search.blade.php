<div class="row">
    <div class="col-md mb-5">

        <h3 class="mb-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Filtros de busca</h3>

        <div class="collapse show" id="collapseExample">
            <div class="card card-body">

                <form  action="/user/search" class="row">

                    <input type="hidden" name="action" value="search">

                    <div class="col-md-3">
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Nome do Usuario" value="{{ request()->get('keyword') }}">
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" class="form-control" id="email_user" name="email_user" placeholder="Email" value="{{ request()->get('email_user') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="order_by" name="order_by">
                            <option value="">Ordernar por...</option>
                            <option value="newest">Usuarios recentes</option>
                            <option value="older">Usuarios antigos</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                        <a class="btn btn-warning" >Limpar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
