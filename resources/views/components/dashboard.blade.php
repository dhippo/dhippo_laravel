<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
    @foreach($stats as $stat)
        <div class="cursor-pointer group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl p-6 border border-white/20
                transition-all duration-300 hover:bg-white/20 hover:scale-105 {{ $stat['shadow_hover'] }}">
            <div class="absolute inset-0 bg-gradient-to-br {{ $stat['gradient'] }}/10 rounded-3xl"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-3">
          <span class="text-sm font-semibold uppercase {{ $stat['text_color'] }}">
            {{ $stat['title'] }}
          </span>
                    <div class="w-10 h-10 {{ $stat['gradient'] }}/20 rounded-full flex items-center justify-center">
                        <span class="text-xl {{ $stat['text_color'] }}">{{ $stat['icon'] }}</span>
                    </div>
                </div>
                <span class="text-3xl font-extrabold text-white mb-4 block" style="font-family: 'Lexend', serif;">
          {{ $stat['value'] }}
        </span>
                <div class="w-full bg-white/20 rounded-full h-3 mb-2">
                    <div class="h-3 bg-gradient-to-r {{ $stat['gradient'] }} rounded-full shadow-lg transition-all duration-500 group-hover:shadow-none"
                         style="width: {{ $stat['percent'] }}%">
                    </div>
                </div>
                <div class="{{ $stat['text_color'] }} text-sm">
                    {{ $stat['percent'] }}% {{ $stat['title'] === 'Calories dépensées' ? "de l'objectif" : 'complété' }}
                </div>
            </div>
        </div>
    @endforeach
</div>
