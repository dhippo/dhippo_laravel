<div class="bg-white/5 backdrop-blur-lg rounded-3xl p-10 border border-white/10 shadow-2xl w-full mx-auto">
    <div class="flex items-center justify-between mb-6">
        @if($prevWeek)
            <a href="?week={{ $prevWeek }}" class="text-white text-3xl hover:text-yellow-300">&larr;</a>
        @else
            <span></span>
        @endif
        <h2 class="text-5xl font-extrabold text-white text-center">
            Mon planning {{ $weekTitle }}
        </h2>
        @if($nextWeek)
            <a href="?week={{ $nextWeek }}" class="text-white text-3xl hover:text-yellow-300">&rarr;</a>
        @else
            <span></span>
        @endif
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @foreach($planning as $day => $data)
            @php $isToday = $data['today'] ?? false; @endphp
            <div class="group relative {{ $isToday
            ? 'bg-gradient-to-br from-yellow-400/20 to-orange-400/20 border-2 border-yellow-400/50'
            : 'bg-white/10 border border-white/20' }}
            backdrop-blur-lg rounded-2xl shadow-xl p-6 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300
               {{ $isToday
                   ? 'bg-gradient-to-br from-yellow-500/10 to-orange-500/10'
                   : 'bg-gradient-to-br from-gray-500/10 to-slate-500/10' }}">
                </div>
                <div class="relative z-10 flex flex-col items-center">
                    @if($isToday)
                        <div class="absolute -top-3 -right-3 w-6 h-6 bg-yellow-400 rounded-full animate-pulse"></div>
                    @endif
                    <span class="text-2xl font-bold {{ $isToday ? 'text-yellow-300' : 'text-white' }} mb-1">
              {{ $day }}
            </span>
                    <span class="text-{{ $isToday ? 'yellow-200' : 'gray-300' }} mb-4">
              {{ $data['date'] }}
            </span>
                    @if($isToday)
                        <div class="px-3 py-1 bg-yellow-400/30 text-yellow-200 rounded-full text-sm font-medium mb-4">
                            AUJOURD'HUI
                        </div>
                    @endif
                    <div class="mt-auto w-full space-y-2">
                        @foreach($data['events'] as $event)
                            <div class="text-lg px-4 py-3
                    {{ $event['icon'] === '💤'
                        ? 'bg-white/10 text-gray-300 border border-white/20'
                        : ' text-white '.$event['card_bg'] }}
                    rounded-xl font-medium text-center shadow-lg hover:shadow-xl transition-all duration-300">
                                {!! $event['icon'] !!}
                                <span class="block text-sm opacity-90 {{ $event['text'] }}">({{ $event['label'] }})</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
