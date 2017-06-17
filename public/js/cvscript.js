/**
 * Created by Mojah on 5/20/2017.
 */
jQuery(document).ready
(
    function ($)
    {
        $('#from_date').on('change',function () {
            //window.alert('dsdsd'+ $('#from_date').val());
            $('#edu_date').html($('#from_date').val() +' - ' + $('#to_date').val());
        });
        $('#to_date').on('change',function () {
            //window.alert('dsdsd'+ $('#from_date').val());
            $('#edu_date').html($('#from_date').val() +' - ' + $('#to_date').val());
        });

        $('#newEdu').on('click', function () {
            bootbox.form({
                title: 'Add New Education',
                fields: {
                    major: {
                        label: 'major',
                        type:  'text'
                    },
                    degree: {
                        label: 'degree',
                        type:  'text',

                    },
                    from_date: {
                        label: 'from',
                        type:  'date'
                    },
                    to_date: {
                        label: 'to',
                        type:  'date'
                    },
                    university: {
                        label: 'university',
                        type: 'text'
                    },
                    city: {
                        label: 'City',
                        type: 'dropdown'
                    },
                    country: {
                        label: 'country',
                        type: 'dropdown'
                    },
                    des: {
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