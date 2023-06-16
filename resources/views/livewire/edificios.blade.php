<div>
<div >
        <h1 class="p-4 mt-2 text-3xl font-bold text-center text-slate-50 bg-blue-900">
            Informacion De Los Edificios
        </h1>
    </div>
<div class="flex flex-col items-center  text-slate-50 bg-blue-900">
  <p class="text-2xl font-bold mt-4">Dar clic al edificio para ver su información</p>
</div>
 <p class="flex flex-col items-center mb-4 text-slate-50 bg-blue-900">Al dar clic se observará los departamentos de los edificios asi como los encargados</p>

  <div class="flex justify-center items-center">
    <img src="{{ asset('imagenes/mapa2.jpg') }}" width="980" usemap="#mapa_zonas" />
</div>

<map name="mapa_zonas">
    <area shape="rect" coords="122,136,185,198" alt="Edificio N" wire:click="mostrarEdificio(17)"/>
    <area shape="rect" coords="220,137,295,195" alt="Edificio M" wire:click="mostrarEdificio('15')" />
    <area shape="rect" coords="265,210,290,231" alt="Exterior" wire:click="mostrarEdificio('14')" />
    <area shape="rect" coords="221,242,296,307" alt="Edificio L" wire:click="mostrarEdificio('12')" />
    <area shape="rect" coords="324,231,406,256" alt="Edificio F" wire:click="mostrarEdificio('6')" />
    <area shape="rect" coords="413,273,503,298" alt="Edificio D" wire:click="mostrarEdificio('4')" />
    <area shape="rect" coords="381,181,446,207" alt="Edificio H" wire:click="mostrarEdificio('8')" />
    <area shape="rect" coords="427,224,502,255" alt="Edificio E" wire:click="mostrarEdificio('5')" />
    <area shape="rect" coords="483,181,517,206" alt="Edificio G" wire:click="mostrarEdificio('7')" />
    <area shape="rect" coords="525,146,561,208" alt="Edificio K" wire:click="mostrarEdificio('11')" />
    <area shape="rect" coords="578,256,659,282" alt="Edificio C" wire:click="mostrarEdificio('3')" />
    <area shape="rect" coords="577,298,635,323" alt="Edificio A" wire:click="mostrarEdificio('1')" />
    <area shape="rect" coords="648,297,683,323" alt="Edificio B" wire:click="mostrarEdificio('2')" />
    <area shape="rect" coords="408,425,432,447" alt="Edificio J" wire:click="mostrarEdificio('10')" />
</map>

<div class="fixed inset-0 flex items-center justify-center">
  <div class=" bg-blue-900 px-4 pb-4 sm:p-6 sm:pb-4 relative transform overflow-hidden rounded-3xl outline outline-blue-800 text-left shadow-xl transition-all sm:my-8 max-w-7xl">
    <button class="absolute top-2 right-2 text-gray-200 hover:text-gray-300 focus:outline-none" onclick="closeModal()">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    @if ($nombreEdificio)
      <div class="flex flex-col items-center justify-center space-y-4">
        <h2 class="text-3xl font-bold text-slate-50">{{ $nombreEdificio->nombre }}</h2>
        <div class="">
          @foreach($nombreEdificio->departamentos as $departamento)
          <div class="bg-blue-900 rounded-md shadow-md px-4 py-0 items-center justify-between transition duration-500 ease-in-out transform hover:-translate-y-1 hover:shadow-lg hover:bg-gray-200">
          <div class="text-lg font-bold text-slate-50">{{ $departamento->nombre }}</div>
          <div class="text-sm text-slate-50">{{ $departamento->encargado }}</div>
        </div>
          @endforeach
        </div>
      </div>
    @endif
  </div>
</div>

<script>
  function closeModal() {
    document.querySelector('.fixed').style.display = 'none';
  }
</script>


</div>
<script src="https://cdn.tailwindcss.com"></script>