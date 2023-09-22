<x-app-layout>
    <section>
        <div class="mx-auto max-w-[1240px] px-4">
            <div class="w-full flex flex-col items-center justify-center">

                <div class="py-12">
                    <p class="text-2xl font-medium">Please choose the service you need.</p>
                </div>

                <div class=" flex items-center space-x-4 rounded-md ">

                    <form action="{{ route('service.type.store') }}" method="POST" 
                    class="border-2 border-gray-400 hover:border-green-400 hover:bg-green-100 rounded-lg p-6 group cursor-pointer">
                    @csrf
                    <input type="hidden" name="service_type" value="Memorial Service">
                       <button type="submit" class="flex space-x-4 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60.000000pt" height="60.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                
                                <g class=" group-hover:fill-green-600" transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                <path d="M1052 5022 c-80 -32 -105 -68 -247 -353 l-134 -268 -165 -3 c-180 -3 -192 -7 -240 -72 -21 -27 -21 -34 -21 -886 0 -852 0 -859 21 -886 11 -15 33 -37 48 -48 27 -20 41 -21 457 -24 l429 -3 0 -239 0 -240 80 0 80 0 0 400 0 400 80 0 80 0 0 -400 0 -400 80 0 80 0 0 415 c0 328 -3 422 -14 448 -17 43 -68 85 -111 93 -34 6 -35 7 -35 54 0 44 3 49 30 60 42 17 104 90 118 138 17 55 14 118 -7 179 -16 46 -208 353 -221 353 -13 0 -205 -307 -221 -353 -21 -61 -24 -124 -7 -179 14 -48 76 -121 118 -138 27 -11 30 -16 30 -60 0 -47 -1 -48 -35 -54 -43 -8 -94 -50 -111 -93 -9 -20 -14 -70 -14 -128 l0 -95 -400 0 -400 0 0 640 0 640 2160 0 2160 0 0 -640 0 -640 -400 0 -400 0 0 95 c0 58 -5 108 -14 128 -17 43 -68 85 -111 93 -34 6 -35 7 -35 54 0 44 3 49 30 60 42 17 104 90 118 138 17 55 14 118 -7 179 -16 46 -208 353 -221 353 -13 0 -205 -307 -221 -353 -21 -61 -24 -124 -7 -179 14 -48 76 -121 118 -138 27 -11 30 -16 30 -60 0 -47 -1 -48 -35 -54 -43 -8 -94 -50 -111 -93 -11 -26 -14 -120 -14 -448 l0 -415 80 0 80 0 0 400 0 400 80 0 80 0 0 -400 0 -400 80 0 80 0 0 240 0 239 429 3 c416 3 430 4 457 24 15 11 37 33 48 48 21 27 21 34 21 886 0 852 0 859 -21 886 -48 65 -60 69 -240 72 l-165 3 -134 268 c-133 267 -163 313 -229 349 -29 16 -132 17 -1511 19 -1373 2 -1483 1 -1523 -15z m2969 -152 c11 -6 68 -109 134 -240 l115 -230 -1710 0 -1710 0 115 229 c63 126 122 234 132 240 25 15 2897 15 2924 1z m699 -710 l0 -80 -2160 0 -2160 0 0 80 0 80 2160 0 2160 0 0 -80z m-3241 -765 c19 -31 36 -74 38 -99 5 -38 2 -48 -20 -70 -17 -17 -37 -26 -57 -26 -20 0 -40 9 -57 26 -22 22 -25 32 -20 70 4 39 62 154 77 154 3 0 21 -25 39 -55z m2240 0 c19 -31 36 -74 38 -99 5 -38 2 -48 -20 -70 -17 -17 -37 -26 -57 -26 -20 0 -40 9 -57 26 -22 22 -25 32 -20 70 4 39 62 154 77 154 3 0 21 -25 39 -55z"/>
                                <path d="M2480 2880 l0 -400 -50 0 -49 0 -20 68 c-11 37 -43 148 -71 247 -29 99 -53 181 -55 183 -1 2 -36 -7 -77 -18 l-75 -22 64 -221 c34 -122 63 -225 63 -229 0 -5 -77 -8 -170 -8 l-170 0 106 -212 c58 -117 108 -215 110 -217 4 -5 144 60 144 66 0 2 -23 48 -50 103 l-50 100 430 0 430 0 -50 -100 c-27 -55 -50 -101 -50 -103 0 -6 140 -71 144 -66 2 2 52 100 110 217 l106 212 -170 0 c-93 0 -170 3 -170 8 0 4 29 107 63 229 l64 221 -75 22 c-41 11 -76 20 -77 18 -2 -2 -26 -84 -55 -183 -28 -99 -60 -210 -71 -247 l-20 -68 -49 0 -50 0 0 400 0 400 -80 0 -80 0 0 -400z"/>
                                <path d="M1857 1989 c-105 -25 -224 -111 -286 -207 -17 -27 -31 -52 -31 -55 0 -6 115 -87 124 -87 3 0 23 27 46 59 84 119 206 165 334 127 68 -21 118 -59 166 -127 23 -32 43 -59 46 -59 9 0 124 81 124 87 0 19 -69 109 -116 152 -111 101 -266 143 -407 110z"/>
                                <path d="M3057 1989 c-105 -25 -224 -111 -286 -207 -17 -27 -31 -52 -31 -55 0 -6 115 -87 124 -87 3 0 23 27 46 59 84 119 206 165 334 127 68 -21 118 -59 166 -127 23 -32 43 -59 46 -59 9 0 124 81 124 87 0 19 -69 109 -116 152 -111 101 -266 143 -407 110z"/>
                                <path d="M1186 1670 c-63 -16 -153 -70 -197 -117 -22 -24 -55 -74 -72 -111 -29 -61 -32 -76 -32 -162 0 -82 4 -103 27 -153 15 -32 42 -77 59 -98 17 -22 30 -41 28 -43 -2 -2 -31 -17 -65 -35 -114 -60 -216 -160 -283 -276 -30 -52 -67 -154 -121 -332 l-31 -103 -209 0 -210 0 0 -80 0 -80 2480 0 2480 0 0 80 0 80 -210 0 -209 0 -31 103 c-54 178 -91 280 -121 332 -67 116 -169 216 -283 276 -34 18 -63 33 -65 35 -2 2 11 21 28 43 17 21 44 66 59 98 23 50 27 71 27 153 0 86 -3 101 -32 162 -44 93 -100 151 -191 196 -72 35 -81 37 -171 37 -87 0 -102 -3 -163 -32 -93 -44 -151 -100 -196 -191 -35 -72 -37 -81 -37 -171 0 -83 4 -104 27 -154 15 -32 42 -77 59 -98 17 -22 30 -41 28 -43 -2 -2 -32 -18 -65 -35 -103 -54 -214 -159 -267 -253 -12 -21 -24 -38 -27 -38 -3 0 -15 17 -27 38 -52 92 -166 200 -265 252 -35 18 -65 34 -67 36 -2 2 11 21 28 43 17 21 44 66 59 98 23 50 27 71 27 154 0 90 -2 99 -37 171 -45 91 -103 147 -196 191 -61 29 -76 32 -163 32 -90 0 -99 -2 -171 -37 -91 -45 -147 -103 -191 -196 -29 -61 -32 -76 -32 -162 0 -82 4 -103 27 -153 15 -32 42 -77 59 -98 17 -22 30 -41 28 -43 -2 -2 -32 -18 -65 -35 -103 -54 -214 -159 -267 -253 -12 -21 -24 -38 -27 -38 -3 0 -15 17 -27 38 -52 92 -166 200 -265 252 -35 18 -65 34 -67 36 -2 2 11 21 28 43 17 21 44 66 59 98 23 50 27 71 27 154 0 90 -2 99 -37 171 -68 136 -188 217 -336 224 -42 2 -94 -1 -116 -6z m168 -162 c55 -16 138 -99 154 -154 28 -94 8 -169 -63 -239 -101 -102 -229 -102 -330 0 -102 101 -102 229 0 330 70 71 145 90 239 63z m1280 0 c86 -26 166 -136 166 -228 0 -124 -116 -240 -240 -240 -92 0 -202 80 -228 166 -28 94 -8 169 63 239 70 71 145 90 239 63z m1280 0 c86 -26 166 -136 166 -228 0 -124 -116 -240 -240 -240 -124 0 -240 116 -240 240 0 63 23 114 75 165 70 71 145 90 239 63z m-2511 -643 c194 -41 363 -199 420 -395 12 -42 11 -52 -15 -138 l-29 -92 -555 0 c-524 0 -555 1 -550 18 2 9 19 67 36 127 48 165 90 246 169 324 142 142 329 198 524 156z m1280 0 c152 -32 310 -153 376 -286 23 -48 111 -313 111 -336 0 -2 -275 -3 -611 -3 -577 0 -610 1 -605 18 2 9 19 67 36 127 48 165 90 246 169 324 142 142 329 198 524 156z m1280 0 c152 -32 310 -153 376 -286 23 -48 111 -313 111 -336 0 -2 -250 -3 -555 -3 l-554 0 -29 93 c-33 106 -31 117 25 236 25 52 54 93 102 140 142 142 329 198 524 156z"/>
                                </g>
                            </svg>
                            <p class="text-base font-medium text-gray-700 group-hover:text-green-600">Memmorial Services</p>
                       </button>
                    </form>

                    <form action="{{ route('service.type.store') }}" method="POST" 
                    class="border-2 border-gray-400 hover:border-green-300 hover:bg-green-50 rounded-lg p-6 group cursor-pointer">
                    @csrf
                    <input type="hidden" name="service_type" value="Direct Crimation">
                        <button type="submit" class="flex space-x-4 items-center">
                            <img src="{{ asset('icons/urn.png') }}" alt=""
                            class="w-20 h-20 transition-transform transform hover:scale-105 filter hover:grayscale-0 hover:sepia-0 hover:hue-rotate-0 hover:saturate-100 hover:invert-0 hover:blur-0 hover:brightness-100 hover:contrast-100 hover:drop-shadow-md">
                             <p class="text-base font-medium text-gray-700 group-hover:text-green-500">Direct Crimation</p>
                        </button>
                     </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>