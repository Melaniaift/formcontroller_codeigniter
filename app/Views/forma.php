<?php
helper('form');
echo form_open('FormsController/copy1');

$data1=['name' =>'text1',
    'id' =>'text1',
    'value' => $var1,
    'maxlength' =>'100',
    'size' =>'30',
];

echo form_label('Text1','text1');
echo form_input($data1);

echo form_submit('submit','->');

$data2=['name' =>'text2',
    'id' =>'text2',
    'value' =>$var2,
    'maxlength' =>'100',
    'size' =>'30',
    ];
echo form_label('Text2','text2');
echo form_input($data2);
echo "<br><br>";

$radio1=['name' =>'letter',
    'id' =>'letter1',
    'value' =>'upper',
    'checked' =>set_radio('letter','Upper',TRUE),
];

#label
echo form_label('Upper','letter1');
echo form_radio($radio1);
echo "<br><br>";

$radio2=['name' =>'letter',
    'id' =>'letter2',
    'value' =>'lower',
    'checked' =>set_radio('letter','Lower',FALSE),
];

#label
echo form_label('Lower','letter2');
echo form_radio($radio2);
echo form_close();