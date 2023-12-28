@extends('layouts.app')

@section('title', 'Перевод')

@section('content')
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-0297da3b="" class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <livewire:transfer-form />
        </div>
    </main>
@endsection


@section('old-content')
    <main class="page-content">
        <div class="page-content__content  user-page">
            @include('cabinet._navigation')
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp"><h2 class="user-section__title  g-fs-20" style="margin-bottom: .9em">Внутренний перевод</h2><div class="user-section__text  g-text-left"><p>Внутренние переводы делайте только знакомым Вам людям, кого Вы лично знаете, с кем Вы лично общаетесь по телефону. И Вы сами ответственны за любой внутренний перевод другому пользователю, вся ответственность лежит на Вас. Поэтому лишний раз незнакомым Вам людям не отправляйте и не запрашивайте внутренние переводы. Так как по чатам действуют мошенники, которые предлагают продать или купить внутренние средства. Вся ответственность за переводы лежит на Вас.</p></div><h4 class="user-section__alert">ВНИМАНИЕ! ДАННАЯ ИНФОРМАЦИЯ ОБЯЗАТЕЛЬНА К ПРОЧТЕНИЮ!</h4></section>
                    @include('layouts._balance')

                    <section class="user-section fadeInUp" data-show-animation="fadeInUp"><h2
                            class="user-section__title  _marg-b  g-fs-20">Внутренний перевод другому пользователю</h2>
                        <form class="form ng-untouched ng-pristine ng-invalid" method="post" action="{{ route('cabinet.transfer.store') }}">
                            @csrf
                            <ul class="errors-list">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <div class="form__inputs-wrap">
                                <div class="form__input form-group"><label class="form-group__label"> ID
                                        получателя*</label><input value="{{ old('user_id') }}"
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="user_id" type="text"><!----></div>
                                <div class="form__input  form-group"><label class="form-group__label">Повторите ID
                                        получателя*</label><input
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="user_id_confirmation" type="text"><!----><!----></div>
                                <div class="form__input  form-group"><label class="form-group__label"> Выберите
                                        валюту*</label><select class="select-dropdown ng-untouched ng-pristine ng-valid"
                                                               name="currency"><!---->
                                        <option value="{{ \App\Account::CURRENCY_RUB }}">Рубль</option>
                                        <option value="{{ \App\Account::CURRENCY_EUR }}">AM</option>
                                        <option value="{{ \App\Account::CURRENCY_USD }}">Доллар</option>
                                        <option value="{{ \App\Account::CURRENCY_BTC_ONE }}">{{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}</option>
                                        <option value="{{ \App\Account::CURRENCY_BTC_TWO }}">{{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}</option>
                                    </select></div>
                                <div class="form__input form-group"><label class="form-group__label"> Введите сумму*</label><input
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="amount" type="text" value="{{ old('amount') }}"><!----></div>
{{--                                <div class="form__input  form-group  _full"><label class="form-group__label">Ваш--}}
{{--                                        комментарий</label><textarea--}}
{{--                                        class="form-group__input ng-untouched ng-pristine ng-valid"--}}
{{--                                        name="comment" rows="2" type="text"></textarea>--}}
{{--                                    <p class="form-group__note  g-text-light"> В комментарии Вы можете указать платежные--}}
{{--                                        реквизиты, на которые Вам должны прислать денежные средства за продажу--}}
{{--                                        внутренней валюты. </p></div>--}}
                            </div>
                            <div class="form__checkbox-wrap"><label class="checkbox"><label
                                        class="form__checkbox  checkbox  _full  g-color-red" for="agreement"
                                        style="padding-left: 5rem;"> Я подтверждаю, что несу полную ответственность за
                                        перевод внутренней валюты другому пользователю. Так же я подтверждаю, что лично
                                        знаком с человеком, которому осуществляю перевод. </label><input
                                        name="agreement" id="agreement" type="checkbox"
                                        class="ng-untouched ng-pristine ng-invalid"><span class="checkbox__mark"></span></label><label
                                    class="checkbox"><label class="form__checkbox  checkbox  _full  g-color-red"
                                                            for="agreementNonRollback" style="padding-left: 5rem;"> Я
                                        согласен с тем, что данный перевод невозможно отменить. (Письма и звонки в
                                        техническую поддержку об отмене перевода не принимаются и не
                                        рассматриваются). </label><input name="transferAgreement"
                                                                         id="agreementNonRollback" type="checkbox"
                                                                         class="ng-untouched ng-pristine ng-invalid"><span
                                        class="checkbox__mark"></span></label></div>
                            <div class="form__btns-wrap">
                                <button class="btn profile__btn">Перевести</button>
                            </div>
                        </form>
                    </section>
                </div>
            </app-invest>
        </div>
    </main>
@endsection
