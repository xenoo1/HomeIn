<section class="header4">
           
    <header class="frame-parent34">
  
      <nav class="navigation-bar4">
        <div class="symbol-wrapper">
          <img
            class="symbol-icon8"
            loading="lazy"
            alt="Symbol Icon"
            src="./images/symbol.svg"
        />
        </div>
        <div class="text-wrapper4">
          <img
            class="text-icon8"
            loading="lazy"
            alt="Text Icon"
            src="./images/text.svg"
          />
        </div>
        {{-- <div class="button-wrapper">
          <button class="button72">
            
          </button>
        </div> --}}
        <nav class="navigation-bar-inner2"> 
              <nav class="text-button-parent">
                <a href=""><div class="text102">Home</div></a>
                <a href=""><div class="text-button21">About Us</div></a>
                <a href="{{ route('property') }}"><div class="text-button22">Properties</div></a>
             
              </nav> 
        </nav>
        <form action="{{ route('login') }}" method="GET">
        <button type="submit" class="button73">
          <div class="text103">Login</div>         
        </button>
        </form>
      </nav>
    </header>
  </section>