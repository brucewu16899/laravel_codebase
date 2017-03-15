<li class="{{ Request::is('typeReferences*') ? 'active' : '' }}">
    <a href="{!! route('typeReferences.index') !!}"><i class="fa fa-edit"></i><span>TypeReferences</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('productOffers*') ? 'active' : '' }}">
    <a href="{!! route('productOffers.index') !!}"><i class="fa fa-edit"></i><span>ProductOffers</span></a>
</li>

<li class="{{ Request::is('productDetails*') ? 'active' : '' }}">
    <a href="{!! route('productDetails.index') !!}"><i class="fa fa-edit"></i><span>ProductDetails</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{!! route('orders.index') !!}"><i class="fa fa-edit"></i><span>Orders</span></a>
</li>

<li class="{{ Request::is('orderDetails*') ? 'active' : '' }}">
    <a href="{!! route('orderDetails.index') !!}"><i class="fa fa-edit"></i><span>OrderDetails</span></a>
</li>

<li class="{{ Request::is('virtualProducts*') ? 'active' : '' }}">
    <a href="{!! route('virtualProducts.index') !!}"><i class="fa fa-edit"></i><span>VirtualProducts</span></a>
</li>

<li class="{{ Request::is('virtualProductOrders*') ? 'active' : '' }}">
    <a href="{!! route('virtualProductOrders.index') !!}"><i class="fa fa-edit"></i><span>VirtualProductOrders</span></a>
</li>

<li class="{{ Request::is('freeProducts*') ? 'active' : '' }}">
    <a href="{!! route('freeProducts.index') !!}"><i class="fa fa-edit"></i><span>FreeProducts</span></a>
</li>

<li class="{{ Request::is('freeProductParticipants*') ? 'active' : '' }}">
    <a href="{!! route('freeProductParticipants.index') !!}"><i class="fa fa-edit"></i><span>FreeProductParticipants</span></a>
</li>

<li class="{{ Request::is('freeProductOrders*') ? 'active' : '' }}">
    <a href="{!! route('freeProductOrders.index') !!}"><i class="fa fa-edit"></i><span>FreeProductOrders</span></a>
</li>

<li class="{{ Request::is('actionTypes*') ? 'active' : '' }}">
    <a href="{!! route('actionTypes.index') !!}"><i class="fa fa-edit"></i><span>ActionTypes</span></a>
</li>

<li class="{{ Request::is('logs*') ? 'active' : '' }}">
    <a href="{!! route('logs.index') !!}"><i class="fa fa-edit"></i><span>Logs</span></a>
</li>

<li class="{{ Request::is('notices*') ? 'active' : '' }}">
    <a href="{!! route('notices.index') !!}"><i class="fa fa-edit"></i><span>Notices</span></a>
</li>

<li class="{{ Request::is('userPoints*') ? 'active' : '' }}">
    <a href="{!! route('userPoints.index') !!}"><i class="fa fa-edit"></i><span>UserPoints</span></a>
</li>

<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{!! route('comments.index') !!}"><i class="fa fa-edit"></i><span>Comments</span></a>
</li>

<li class="{{ Request::is('paypalOrders*') ? 'active' : '' }}">
    <a href="{!! route('paypalOrders.index') !!}"><i class="fa fa-edit"></i><span>PaypalOrders</span></a>
</li>

<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{!! route('companies.index') !!}"><i class="fa fa-edit"></i><span>Companies</span></a>
</li>

<li class="{{ Request::is('companyFeatures*') ? 'active' : '' }}">
    <a href="{!! route('companyFeatures.index') !!}"><i class="fa fa-edit"></i><span>CompanyFeatures</span></a>
</li>

