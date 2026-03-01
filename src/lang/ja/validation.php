<?php

return [

    'accepted' => ':attribute を承認してください。',
    'accepted_if' => ':other が :value の場合、:attribute を承認してください。',
    'active_url' => ':attribute には有効なURLを指定してください。',
    'after' => ':attribute には :date 以降の日付を指定してください。',
    'after_or_equal' => ':attribute には :date 以降もしくは同日の日付を指定してください。',
    'alpha' => ':attribute には英字のみ使用できます。',
    'alpha_dash' => ':attribute には英数字・ハイフン・アンダースコアのみ使用できます。',
    'alpha_num' => ':attribute には英数字のみ使用できます。',
    'array' => ':attribute には配列を指定してください。',
    'boolean' => ':attribute には true か false を指定してください。',
    'confirmed' => ':attribute と確認用が一致しません。',
    'date' => ':attribute には有効な日付を指定してください。',
    'email' => ':attribute の形式が正しくありません。',
    'file' => ':attribute にはファイルを指定してください。',
    'image' => ':attribute には画像ファイルを指定してください。',
    'integer' => ':attribute には整数を指定してください。',
    'max' => [
        'string' => ':attribute は :max 文字以内で入力してください。',
        'numeric' => ':attribute は :max 以下で入力してください。',
        'file' => ':attribute は :max KB 以下のファイルにしてください。',
        'array' => ':attribute は :max 個以下にしてください。',
    ],
    'min' => [
        'string' => ':attribute は :min 文字以上で入力してください。',
        'numeric' => ':attribute は :min 以上で入力してください。',
        'file' => ':attribute は :min KB 以上のファイルにしてください。',
        'array' => ':attribute は :min 個以上にしてください。',
    ],
    'numeric' => ':attribute には数字を指定してください。',
    'digits_between' => ':attributeは:min桁から:max桁で入力してください。',
 
    'required' => ':attributeを入力してください',

    'same' => ':attribute と :other が一致しません。',
    'string' => ':attribute には文字列を指定してください。',
    'unique' => 'この :attribute は既に使用されています。',
    'url' => ':attribute の形式が正しくありません。',

    'attributes' => [
        'name' => 'お名前',
        'email' => 'メールアドレス',
        'tel' => '電話番号',
        'content' => 'お問い合わせ内容',
    ],

];