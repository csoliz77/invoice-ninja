{{ $clientName }},

{{ trans('texts.payment_message', ['amount' => $paymentAmount]) }}

@if ($emailFooter)
{{ $emailFooter }}
@else
{{ trans('texts.email_signature') }}
{{ $accountName }}
@endif

{{ trans('texts.ninja_email_footer', ['site' => 'Invoice Ninja']) }}
{{ SITE_URL }}