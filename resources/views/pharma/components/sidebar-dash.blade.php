<div class="user-info mt-4">
    <div class="card">
        <div class="items mt-2">
            <h5>Dashboard</h5>
            <ul>
                <li><a href="{{ route('pro.dashboard')}}" class="{{ Route::is('pro.dashboard')? 'active' : '' }}"><i class="bi bi-speedometer"></i>  Tableau de bord</a></li>
                <li><a href="{{ route('pro.buys')}}" class="{{ Route::is('pro.buys')? 'active' : '' }}"><i class="bi ico bi-bag"></i> Commandes</a></li>
                <li><a data-toggle="dropdown" href="{{ route('pro.product-list')}}" class="{{ Route::is('pro.product-list')? 'active' : '' }}"><i class="bi bi-shop"></i> Produits</a></li>


                <li><a href="{{ route('pro.user')}}" class="{{ Route::is('pro.user')? 'active' : '' }}"><i class="bi bi-person"></i>  Utilisateurs</a></li>
                <li><a href="{{ route('pro.agent')}}" class="{{ Route::is('pro.agent')? 'active' : '' }}"><i class="bi bi-person"></i>   Agents</a></li>


                <li><a href="{{ asset('/settings') }}"><i class="bi bi-gear"></i> Paramètres</a></li>
                <li><a href=""><i class="bi bi-gear"></i> Deconnexion</a></li>
            </ul>

            {{-- <div class="history-block">
                <div class=" history-card">
                    <div class="heading d-flex justify-content-between">
                        <i class="bi bi-clock-history"></i>
                        <i class="bi bi-three-dots-vertical"></i>
                    </div>
                    <h6>Votre historique</h6>

                    <p>Vous avez une mise à jour dans vos finances.</p>
                </div>
            </div> --}}

        </div>
    </div>
</div>
