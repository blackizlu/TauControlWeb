@extends('dashboard.layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            Administrador de cotizaciones
                        </h4>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Administrador</a>
                            </li>
                            <li class="breadcrumb-item active">Categorías</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-light lter bg-container">
                <div class="row">
                    <div class="col-12 data_tables">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"></i>Lista de categorías
                            </div>
                            <div class="card-block m-t-35">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="float-md-right text-center">
                                            <div class="btn-group show-hide">
                                                <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal"
                                                   data-href="#categoria" href="#categoria">Nueva categoría &nbsp;<i class="fa fa-plus-circle"></i>
                                                </a>
                                                <div id="sample_4_column_toggler" class="dropdown-menu dropdown-checkboxes dropdown_checkbox_margin_left float-right">
                                                    <label>
                                                        <input type="checkbox" checked data-column="1">Name</label>
                                                    <label>
                                                        <input type="checkbox" checked data-column="2">Age</label>
                                                    <label>
                                                        <input type="checkbox" checked data-column="3">Location</label>
                                                    <label>
                                                        <input type="checkbox" checked data-column="4">Contact</label>
                                                    <label>
                                                        <input type="checkbox" checked data-column="5">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table_res" id="sample_4">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th class="hidden-xs">Location</th>
                                        <th class="hidden-xs">Contact</th>
                                        <th class="hidden-xs">Email</th>
                                    </tr>
                                    </thead>
                                    <tbody><tr><td>Kiana Hahn</td><td>50</td><td>New Jonatan</td><td>365-997-1149</td><td>Kiana73@hotmail.com</td></tr><tr><td>Octavia Gibson</td><td>76</td><td>Lake Breanneville</td><td>778-708-0735</td><td>Octavia_Gibson17@gmail.com</td></tr><tr><td>Julia Reichel</td><td>24</td><td>North Darronberg</td><td>736-915-3862</td><td>Julia.Reichel92@yahoo.com</td></tr><tr><td>Justine Schowalter</td><td>68</td><td>East Jamirview</td><td>294-283-9728</td><td>Justine94@gmail.com</td></tr><tr><td>Maxwell Zemlak</td><td>54</td><td>Eunahaven</td><td>509-542-4821</td><td>Maxwell.Zemlak@yahoo.com</td></tr><tr><td>Maribel Gerhold</td><td>71</td><td>Estelletown</td><td>957-879-7629</td><td>Maribel.Gerhold@gmail.com</td></tr><tr><td>Yazmin Turcotte</td><td>31</td><td>Andrewbury</td><td>110-791-2923</td><td>Yazmin1@yahoo.com</td></tr><tr><td>Rahul Tromp</td><td>67</td><td>Lake Briceview</td><td>729-132-8087</td><td>Rahul28@yahoo.com</td></tr><tr><td>Jasmin Gusikowski</td><td>73</td><td>North Abigailshire</td><td>903-765-3090</td><td>Jasmin.Gusikowski@yahoo.com</td></tr><tr><td>Cale Gleason</td><td>32</td><td>Lake Genevieve</td><td>759-886-4400</td><td>Cale.Gleason@yahoo.com</td></tr><tr><td>Kayley Kerluke</td><td>75</td><td>South Trishaborough</td><td>279-286-5278</td><td>Kayley.Kerluke@gmail.com</td></tr><tr><td>Floyd Farrell</td><td>30</td><td>Wymanfurt</td><td>796-336-6537</td><td>Floyd.Farrell18@yahoo.com</td></tr><tr><td>Zackary Daniel</td><td>24</td><td>Janicetown</td><td>880-030-1600</td><td>Zackary79@hotmail.com</td></tr><tr><td>Santos Kunde</td><td>42</td><td>Baumbachstad</td><td>198-036-6433</td><td>Santos.Kunde33@yahoo.com</td></tr><tr><td>Dominique Berge</td><td>78</td><td>Aniyahmouth</td><td>779-004-1917</td><td>Dominique.Berge18@yahoo.com</td></tr><tr><td>Fabian Dickinson</td><td>54</td><td>Jerrellfort</td><td>483-827-5678</td><td>Fabian39@hotmail.com</td></tr><tr><td>Rosie White</td><td>40</td><td>Labadieshire</td><td>275-183-8949</td><td>Rosie61@yahoo.com</td></tr><tr><td>Karlie Cartwright</td><td>53</td><td>East Rubie</td><td>553-077-5020</td><td>Karlie.Cartwright19@hotmail.com</td></tr><tr><td>Grace Romaguera</td><td>41</td><td>Kutchshire</td><td>577-578-2307</td><td>Grace_Romaguera71@hotmail.com</td></tr><tr><td>Gerhard Dietrich</td><td>36</td><td>DuBuqueville</td><td>513-028-9142</td><td>Gerhard32@gmail.com</td></tr><tr><td>Francisca Hoeger</td><td>32</td><td>Novashire</td><td>998-135-3293</td><td>Francisca28@hotmail.com</td></tr><tr><td>Kendrick Dicki</td><td>61</td><td>East Toneyview</td><td>564-020-2377</td><td>Kendrick_Dicki@gmail.com</td></tr><tr><td>Priscilla Mosciski</td><td>49</td><td>Arnoview</td><td>247-303-7787</td><td>Priscilla.Mosciski27@yahoo.com</td></tr><tr><td>Emilia Quigley</td><td>35</td><td>Port Theodore</td><td>799-808-7144</td><td>Emilia_Quigley@yahoo.com</td></tr><tr><td>Lora Eichmann</td><td>61</td><td>Madysonshire</td><td>048-143-3979</td><td>Lora.Eichmann84@hotmail.com</td></tr><tr><td>Clarabelle Ortiz</td><td>73</td><td>Bergstromburgh</td><td>078-181-4484</td><td>Clarabelle50@hotmail.com</td></tr><tr><td>Vidal Schoen</td><td>61</td><td>Evelineberg</td><td>646-285-6354</td><td>Vidal6@hotmail.com</td></tr><tr><td>Magdalen Gerlach</td><td>77</td><td>Port Bernita</td><td>705-210-0934</td><td>Magdalen70@hotmail.com</td></tr><tr><td>Noe Gislason</td><td>37</td><td>Hoyttown</td><td>451-812-2902</td><td>Noe.Gislason@yahoo.com</td></tr><tr><td>Jeff Schimmel</td><td>72</td><td>Celiabury</td><td>443-011-6606</td><td>Jeff.Schimmel37@yahoo.com</td></tr><tr><td>Tyrell O'Reilly</td><td>21</td><td>Port Isaiahton</td><td>586-140-4624</td><td>Tyrell.OReilly70@gmail.com</td></tr><tr><td>Gene Erdman</td><td>27</td><td>Maureentown</td><td>480-708-5384</td><td>Gene.Erdman@gmail.com</td></tr><tr><td>Milo Spinka</td><td>78</td><td>Lakinbury</td><td>587-441-1827</td><td>Milo99@yahoo.com</td></tr><tr><td>Iva Hegmann</td><td>79</td><td>Smithside</td><td>496-238-5308</td><td>Iva.Hegmann@gmail.com</td></tr><tr><td>Hal Mayer</td><td>51</td><td>North Jeanshire</td><td>533-082-9278</td><td>Hal_Mayer@gmail.com</td></tr><tr><td>Garret Will</td><td>58</td><td>New Evelyn</td><td>878-572-7402</td><td>Garret_Will33@yahoo.com</td></tr><tr><td>Reyes Stehr</td><td>70</td><td>North Giles</td><td>011-439-1435</td><td>Reyes_Stehr@yahoo.com</td></tr><tr><td>Abagail Predovic</td><td>40</td><td>Krystinaburgh</td><td>222-092-1224</td><td>Abagail6@yahoo.com</td></tr><tr><td>Bridie Gerlach</td><td>59</td><td>New Elsie</td><td>486-238-7849</td><td>Bridie.Gerlach30@hotmail.com</td></tr><tr><td>Natalie Renner</td><td>54</td><td>North Maiyahaven</td><td>987-939-9063</td><td>Natalie_Renner60@gmail.com</td></tr><tr><td>Mandy Buckridge</td><td>62</td><td>Kihnbury</td><td>712-815-4573</td><td>Mandy75@gmail.com</td></tr><tr><td>Matilda Green</td><td>60</td><td>Gaylordport</td><td>404-572-7719</td><td>Matilda_Green61@yahoo.com</td></tr><tr><td>Brandon Koch</td><td>62</td><td>East Adonis</td><td>004-535-4509</td><td>Brandon.Koch@yahoo.com</td></tr></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
        <!-- Modal -->
        <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
             aria-hidden="true">
            <form>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="float-right" aria-hidden="true">&times;</span>
                        </button>
                        <div class="input-group search_bar_small">
                            <input type="text" class="form-control" placeholder="Search..." name="search">
                            <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
      </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--- responsive modal para agregar categorias -->
    <div class="modal fade in display_none" id="categoria" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-white">Nueva Categoría</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Ingresa el nombre de la categoría</h4>
                            <p>
                                <input id="name" name="name" type="text" placeholder="Categoría" class="form-control"></p>
                            <p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN modal categoria-->

    <!--- responsive modal para agregar subcategorias -->
    <div class="modal fade in display_none" id="subcategoria" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-white">Nueva Sub Categoría</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Ingresa el nombre de la Sub categoría</h4>
                            <p>
                                <input id="name" name="name" type="text" placeholder="Sub categoría" class="form-control"></p>
                            <p>
                            <h4>Selecciona la categoría a la que pertenece</h4>
                            <div class="form-group">
                                <select class="form-control">
                                    <option disabled selected>Categorías</option>
                                    <option>Item 1</option>
                                    <option>Item 2</option>
                                    <option>Item 3</option>
                                    <option>Item 4</option>
                                    <option>Item 5</option>
                                </select>
                            </div>
                        </div>
                        <p>
                        <div class="card-block seclect_form">

                        </div>
                        <p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN modal subcategoria-->
@endsection
@section('scripts')
    @if(Session::has('message'))
        <script>
            iziToast.show({
                title: 'Success',
                message: '{!! Session::get('message') !!}',
                color:'#cc2900',
                position: 'bottomCenter'
            });
        </script>
    @endif
    <script>
        $('.confirm').click(function (e) {
            console.log('click');
            e.preventDefault();
            var id = $(this).data('id');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar el registro?',
                icon: 'fa fa-question-circle',
                hide: false,
                type: 'success',
                confirm: {
                    confirm: true
                },
                buttons: {
                    closer: false,
                    sticker: false
                },
                history: {
                    history: false
                }
            }).get().on('pnotify.confirm', function () {
                swal(id).done();
            }).on('pnotify.cancel', function () {
                swal('Oh ok. Chicken, I see.').done();

            });
            return false;
        });
    </script>
@endsection

