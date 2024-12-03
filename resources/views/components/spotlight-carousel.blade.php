@push('styles')
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css"/>
@endpush

@push('scripts')
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endpush

<section class="spotlight-carousel">
   <div class="container">
      <div id="spotlight-carousel">
         <div>
            <img src="{{ asset('images/spotlight/onyxias-lair.jpg') }}" alt="Featured title">
            <div class="slide-content">
               <h2>Into the Dragon's Den</h2>
               <p>Prepare to face Onyxia, the fearsome broodmother of the Black Dragonflight, in one of Classic WoW’s most iconic raids.</p>
               <a href="#" class="button button-primary">Button</a>
            </div>
         </div>
         <div>
            <img src="{{ asset('images/spotlight/stranglethorn-vale-pvp.jpg') }}" alt="Featured title">
            <div class="slide-content">
               <h2>Title</h2>
               <p>Description</p>
               <a href="#" class="button button-primary">Button</a>
            </div>
         </div>
         <div>
            <img src="{{ asset('images/spotlight/stratholme-undead.jpg') }}" alt="Featured title">
            <div class="slide-content">
               <h2>Title</h2>
               <p>Description</p>
               <a href="#" class="button button-primary">Button</a>
            </div>
         </div>
         <div>
            <img src="{{ asset('images/spotlight/thousand-needles.jpg') }}" alt="Featured title">
            <div class="slide-content">
               <h2>Title</h2>
               <p>Description</p>
               <a href="#" class="button button-primary">Button</a>
            </div>
         </div>
      </div>
   </div>
</section>


