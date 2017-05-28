/**
 * Created by Mojah on 5/20/2017.
 */
jQuery(document).ready
(
    function ($)
    {
        $('#newEdu').on('click', function () {
            bootbox.form({
                title: 'Add New Education',
                fields: {
                    name: {
                        label: 'Name',
                        value: 'John Connor',
                        type:  'text'
                    },
                    email: {
                        label: 'E-mail',
                        type:  'email',
                        value: 'johnconnor@skynet.com'
                    },
                    type: {
                        label: 'Type',
                        type:  'select',
                        options: [
                            {value: 1, text: 'Human'},
                            {value: 2, text: 'Robot'}
                        ]
                    },
                    alive: {
                        label: 'Is alive',
                        type: 'checkbox',
                        value: true
                    },
                    loves: {
                        label: 'Loves',
                        type: 'checkbox',
                        value: ['bike','mom','vg'],
                        options: [
                            {value: 'bike', text: 'Motorbike'},
                            {value: 'mom', text: 'His mom'},
                            {value: 'vg', text: 'Video games'},
                            {value: 'kill', text: 'Killing people'}
                        ]
                    },
                    passwd: {
                        label: 'Password',
                        type: 'password'
                    },
                    desc: {
                        label: 'Description',
                        type: 'textarea'
                    }
                },
                callback: function (values) {
                    console.log(values)
                }
            });
        });
    }
);