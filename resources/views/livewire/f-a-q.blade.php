<div data-v-d661a07e="" class="padding-y-5 padding-y-6--md">
    <div data-v-d661a07e="" class="box">
        <div data-v-d661a07e="" class="grid grid-row-gap-5 grid-column-gap-5--lg">
            <div data-v-d661a07e="" class="grid-column-12 grid-column-3--lg">
                <div data-v-d661a07e="">
                    <ul data-v-d661a07e="" class="margin-top-5 margin-bottom-0 padding-left-0 no-list grid grid-row-gap-3">
                        @foreach(config('faq') as $sIndex => $section)
                            <li data-v-d661a07e="" class="grid-column-12">
                                <a data-v-d661a07e="" wire:click="openSection({{ $sIndex }})" class="text-accent font-medium @if($sectionIndex === $sIndex) router-link-exact-active router-link-active link-default @else router-link-active link-gray @endif">
                                    {{ $section['sectionTitle'] }}
                                </a>

                                @if($sectionIndex === $sIndex)
                                    <ul data-v-d661a07e="" class="margin-y-0 padding-left-3 padding-top-3 no-list grid grid-row-gap-3 animate-zoom-fade-in-down transparent">
                                        @foreach($section['questions'] as $qIndex => $question)
                                        <li data-v-d661a07e="" class="grid-column-12">
                                            <a href="#answer_body" wire:click="openQuestion({{ $sIndex }}, {{ $qIndex }})" @if($qIndex !== $questionIndex) class="link-gray" @endif>
                                                {{ $question['q'] }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div data-v-d661a07e="" class="grid-column-12 grid-column-9--lg">
                <div data-v-d661a07e="">
                    <div data-v-d661a07e="">
                        <h2 data-v-d661a07e="" id="answer_body" class="margin-y-0 font-normal margin-bottom-4 text-tight">
                            {{ config('faq')[$sectionIndex]['questions'][$questionIndex]['q'] ?? 'Выберите раздел и вопрос в меню слева' }}
                        </h2>
                        <div data-v-d661a07e="">
                            {{ config('faq')[$sectionIndex]['questions'][$questionIndex]['a'] ?? '' }}
                        </div>
                    </div>
                </div>
                <div data-v-657718e8="" data-v-d661a07e=""
                     class="flex--md justify-between items-center padding-4 border-rounded-3 shadow bg-white margin-top-5 relative z-index-1">
                    <div data-v-657718e8="" class="flex--sm items-center">
                        <svg data-v-657718e8="" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg"
                             class="height-3 fill-primary flex-no-shrink margin-right-3--sm">
                            <path data-v-657718e8=""
                                  d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm-1-7v2h2v-2H9zm2-1.645A3.502 3.502 0 0010 4.5a3.501 3.501 0 00-3.433 2.813l1.962.393A1.5 1.5 0 1110 9.5a1 1 0 00-1 1V12h2v-.645z"
                                  fill="#fff"></path>
                        </svg>
                        <div data-v-657718e8=""><strong data-v-657718e8=""> Все еще не нашли ответ на свой
                                вопрос? </strong>
                            <div data-v-657718e8="" class="font-sm"> Воспользуйтесь одним из способов связи
                                с нами!
                            </div>
                        </div>
                    </div>
                    <a data-v-141d1a81="" data-v-657718e8="" href="{{ route('page.support') }}"
                       class="margin-top-4 margin-top-0--md button button--primary button--mini">
                        <!----><span data-v-141d1a81="" class="button__content"> Поддержка </span></a></div>
            </div>
        </div>
    </div>
</div>
