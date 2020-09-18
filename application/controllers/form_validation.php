<?php
$config=[

       'rules1'=>[
                         [
                          'field' => 'name',
                          'label' => 'Name',
                          'rules' => 'required|alpha|max_length[20]'
                          ],
                          [
                          'field' => 'Paasword',
                          'label' => 'password',
                          'rules' => 'required |alpha|max_length[20]'
                          ],
                          [
                            'field' => 'email',
                            'label' => 'email',
                            'rules' => 'required|alpha|max_length[70]'
                            ],
                            [
                                'field' => 'mob',
                                'label' => 'mob',
                                'rules' => 'required|max_length[12]'
                                ],
                                [
                                    'field' => 'address',
                                    'label' => 'address',
                                    'rules' => 'required |alpha|max_length[70]'
                                    ],
                                    [
                                        'field' => 'sem',
                                        'label' => 'sem',
                                        'rules' => 'required |alpha|max_length[20]'
                                        ],
                                        [
                                            'field' => 'course',
                                            'label' => 'course',
                                            'rules' => 'required | alpha|max_length[50]'
                                            ],

                                            [
                                                'field' => 'pic',
                                                'label' => 'pic',
                                                'rules' => 'required'
                                                ],
        




                     ],
      

                     

];


?>