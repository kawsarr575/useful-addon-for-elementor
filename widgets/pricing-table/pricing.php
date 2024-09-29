<?php

    class UAFE_Pricing_Table extends \Elementor\Widget_Base {

        public function get_name() {
            return 'uafe-pricing';
        }

        public function get_title() {
            return esc_html__( 'Useful Addon Pricing', 'elementor-addon' );
        }

        public function get_icon() {
            return 'eicon-price-table';
        }

        public function get_categories() {
            return [ 'uafe' ];
        }

        public function get_keywords() {
            return [ 'price', 'price-table', 'pricing', 'pricing-table', 'button', 'pricing-package', 'package' ];
        }

        public function get_style_depends() {
            return [ 'uafe-pricing-table' ];
        }

        public function get_script_depends() {
            return [ 'uafe-pricing-table' ];
        }

        protected function register_controls() {

            // Content Tab Start

            $this->start_controls_section(
                'section_content',
                [
                    'label' => esc_html__( 'Content', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );

            $this->add_control(
                'pricing_plan',
                [
                    'label' => esc_html__( 'Pricing Plan', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => false,
                    'default' => esc_html__( 'Pricing Plan', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $this->add_control(
                'footer_text',
                [
                    'label' => esc_html__( 'Footer Text', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => true,
                    'default' => esc_html__( 'Contact us today for a detailed quote', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $this->add_control(
                'currency',
                [
                    'label' => esc_html__( 'Currency', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => false,
                    'default' => esc_html__( '$', 'uafe' ),
                ],
            );

            $this->start_controls_tabs(
                'package_tab'
            );
            
            $this->start_controls_tab(
                'basic_package',
                [
                    'label' => esc_html__( 'Basic', 'uafe' ),
                ]
            );

            $this->add_control(
                'basic_package_price',
                [
                    'label' => esc_html__( 'Price', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => esc_html__( '120', 'uafe' ),
                ],
            );

            $this->add_control(
                'basic_package_title',
                [
                    'label' => esc_html__( 'Package Title', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => false,
                    'default' => esc_html__( 'Basic Plan', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $this->add_control(
                'basic_package_button_text',
                [
                    'label' => esc_html__( 'Button Text', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => false,
                    'default' => esc_html__( 'Purchase Now', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $this->add_control(
                'basic_package_button_link',
                [
                    'label' => esc_html__( 'Button Link', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'options' => [ 'url', 'is_external', 'nofollow' ],
                    'default' => [
                        'url' => '',
                        'is_external' => false,
                        'nofollow' => false,
                    ],
                    'label_block' => true,
                ]
            );
            
            $this->end_controls_tab();

            $this->start_controls_tab(
                'standard_package',
                [
                    'label' => esc_html__( 'Standard', 'uafe' ),
                ]
            );

            $this->add_control(
                'standard_package_price',
                [
                    'label' => esc_html__( 'Price', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => esc_html__( '230', 'uafe' ),
                ],
            );

            $this->add_control(
                'standard_package_title',
                [
                    'label' => esc_html__( 'Package Title', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => false,
                    'default' => esc_html__( 'Epic Plan', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $this->add_control(
                'standard_package_button_text',
                [
                    'label' => esc_html__( 'Button Text', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => false,
                    'default' => esc_html__( 'Purchase Now', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $this->add_control(
                'standard_package_button_link',
                [
                    'label' => esc_html__( 'Button Link', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'options' => [ 'url', 'is_external', 'nofollow' ],
                    'default' => [
                        'url' => '',
                        'is_external' => false,
                        'nofollow' => false,
                    ],
                    'label_block' => true,
                ]
            );
            
            $this->end_controls_tab();

            
            $this->start_controls_tab(
                'premium_package',
                [
                    'label' => esc_html__( 'Premium', 'uafe' ),
                ]
            );

            $this->add_control(
                'premium_package_price',
                [
                    'label' => esc_html__( 'Price', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => esc_html__( '590', 'uafe' ),
                ],
            );

            $this->add_control(
                'premium_package_title',
                [
                    'label' => esc_html__( 'Package Title', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => false,
                    'default' => esc_html__( 'Epic+ Plan', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $this->add_control(
                'premium_package_button_text',
                [
                    'label' => esc_html__( 'Button Text', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => false,
                    'default' => esc_html__( 'Purchase Now', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $this->add_control(
                'premium_package_button_link',
                [
                    'label' => esc_html__( 'Button Link', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'options' => [ 'url', 'is_external', 'nofollow' ],
                    'default' => [
                        'url' => '',
                        'is_external' => false,
                        'nofollow' => false,
                    ],
                    'label_block' => true,
                ]
            );
            
            $this->end_controls_tab();
            $this->end_controls_tabs();


            $repeater = new \Elementor\Repeater();

            $repeater->add_control(
                'feature_title',
                [
                    'label' => esc_html__( 'Feature Name', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => 'false',
                    'default' => esc_html__( 'Management Fees - Starting at 10%', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $repeater->add_control(
                'feature_y_n_1',
                [
                    'label' => esc_html__( 'Feature avaiable or not', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => esc_html__( 'Yes', 'uafe' ),
                    'label_off' => esc_html__( 'No', 'uafe' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $repeater->add_control(
                'feature_y_n_icon_1',
                [
                    'label' => esc_html__( 'Icon', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => false,
                    'skin' => 'inline',
                    'exclude_inline_options' => ['svg'],
                    'default' => [
                        'value' => 'eicon-check',
                        'library' => 'fa-solid',
                    ],
                ]
            );

            $repeater->add_control(
                'feature_y_n_2',
                [
                    'label' => esc_html__( 'Feature avaiable or not', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => esc_html__( 'Yes', 'uafe' ),
                    'label_off' => esc_html__( 'No', 'uafe' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $repeater->add_control(
              'feature_y_n_icon_2',
                [
                  'label' => esc_html__( 'Icon', 'uafe' ),
                  'type' => \Elementor\Controls_Manager::ICONS,
                  'label_block' => false,
                  'skin' => 'inline',
                  'exclude_inline_options' => ['svg'],
                  'default' => [
                      'value' => 'eicon-check',
                      'library' => 'fa-solid',
                    ],
                ]
            );

            $repeater->add_control(
                'feature_y_n_3',
                [
                    'label' => esc_html__( 'Feature avaiable or not', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => esc_html__( 'Yes', 'uafe' ),
                    'label_off' => esc_html__( 'No', 'uafe' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $repeater->add_control(
                'feature_y_n_icon_3',
                [
                    'label' => esc_html__( 'Icon', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => false,
                    'skin' => 'inline',
                    'exclude_inline_options' => ['svg'],
                    'default' => [
                        'value' => 'eicon-close',
                        'library' => 'fa-solid',
                    ],
                ]
            );

            $this->add_control(
                'feature_list',
                [
                    'label' => esc_html__( 'Pricing features list', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'feature_title' => esc_html__( 'Management Fees - Starting at 10%', 'uafe' ),
                            'feature_y_n_1' => 'yes',
                            'feature_y_n_2' => 'yes',
                            'feature_y_n_3' => 'yes',
                            'feature_y_n_icon_1' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_2' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_3' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                        ],
                        [
                            'feature_title' => esc_html__( 'Leasing Fee - 80%', 'uafe' ),
                            'feature_y_n_1' => 'yes',
                            'feature_y_n_2' => 'yes',
                            'feature_y_n_3' => 'yes',
                            'feature_y_n_icon_1' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_2' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_3' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                        ],
                        [
                            'feature_title' => esc_html__( 'Tenant Utilities Concierge Services', 'uafe' ),
                            'feature_y_n_1' => 'yes',
                            'feature_y_n_2' => 'yes',
                            'feature_y_n_3' => 'yes',
                            'feature_y_n_icon_1' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_2' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_3' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                        ],
                        [
                            'feature_title' => esc_html__( 'Portal Rent Collections', 'uafe' ),
                            'feature_y_n_1' => 'yes',
                            'feature_y_n_2' => 'yes',
                            'feature_y_n_3' => 'yes',
                            'feature_y_n_icon_1' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_2' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_3' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                        ],
                        [
                            'feature_title' => esc_html__( 'ACH Owner Distribution', 'uafe' ),
                            'feature_y_n_1' => 'no',
                            'feature_y_n_2' => 'yes',
                            'feature_y_n_3' => 'yes',
                            'feature_y_n_icon_1' => [
                                'value' => 'eicon-close',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_2' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_3' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                        ],
                        [
                            'feature_title' => esc_html__( 'Maintenance & Repair Coordination', 'uafe' ),
                            'feature_y_n_1' => 'no',
                            'feature_y_n_2' => 'yes',
                            'feature_y_n_3' => 'yes',
                            'feature_y_n_icon_1' => [
                                'value' => 'eicon-close',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_2' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_3' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                        ],
                        [
                            'feature_title' => esc_html__( 'Year-end Summary Statement', 'uafe' ),
                            'feature_y_n_1' => 'no',
                            'feature_y_n_2' => 'no',
                            'feature_y_n_3' => 'yes',
                            'feature_y_n_icon_1' => [
                                'value' => 'eicon-close',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_2' => [
                                'value' => 'eicon-close',
                                'library' => 'fa-solid',
                            ],
                            'feature_y_n_icon_3' => [
                                'value' => 'eicon-check',
                                'library' => 'fa-solid',
                            ],
                        ],
                    ],
                    'title_field' => '{{{ feature_title }}}',
                ]
            );

            $this->end_controls_section();


            /**
             * Start Style
             */

            $this->start_controls_section(
                'header_style',
                [
                    'label' => esc_html__( 'Table Head', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'header_height',
                [
                    'label' => esc_html__( 'Height', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 120,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper thead th' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'header_padding',
                [
                    'label' => esc_html__( 'Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 0,
                        'right' => 20,
                        'bottom' => 0,
                        'left' => 20,
                        'unit' => 'px',
                        'isLinked' => false,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper thead th' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'header_bg_color',
                [
                    'label' => esc_html__( 'Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#088EFD',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper thead' => 'background: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_control(
                'header_title_color',
                [
                    'label' => esc_html__( 'Title Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper thead th.title' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'header_title_typography',
                    'selector' => '{{WRAPPER}} .uafe-pricing-table-wrapper thead th.title',
                ]
            );

            $this->add_control(
                'header_package_title_color',
                [
                    'label' => esc_html__( 'Package Name Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper thead th.package span' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'header_package_name_typography',
                    'selector' => '{{WRAPPER}} .uafe-pricing-table-wrapper thead th.package span',
                ]
            );

            $this->add_control(
                'header_package_price_color',
                [
                    'label' => esc_html__( 'Package Price Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper thead th.package' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'header_package_price_typography',
                    'selector' => '{{WRAPPER}} .uafe-pricing-table-wrapper thead th.package',
                ]
            );

            $this->end_controls_section();

            $this->start_controls_section(
                'body_style',
                [
                    'label' => esc_html__( 'Table Body', 'uafe' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'body_td_height',
                [
                    'label' => esc_html__( 'Td Height', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 80,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tbody td' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'body_td_padding',
                [
                    'label' => esc_html__( 'Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 0,
                        'right' => 20,
                        'bottom' => 0,
                        'left' => 20,
                        'unit' => 'px',
                        'isLinked' => false,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tbody td' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'body_tr_odd_bg_color',
                [
                    'label' => esc_html__( 'Tr Odd Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#CCE8FF',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tbody tr:nth-child(odd)' => 'background: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_control(
                'body_tr_even_bg_color',
                [
                    'label' => esc_html__( 'Tr Even Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tbody tr:nth-child(even)' => 'background: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_control(
                'body_title_color',
                [
                    'label' => esc_html__( 'Title Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#323842',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tbody td:first-child' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'body_title_typography',
                    'selector' => '{{WRAPPER}} .uafe-pricing-table-wrapper tbody td:first-child',
                ]
            );

            $this->add_control(
                'body_icon_yes_color',
                [
                    'label' => esc_html__( 'Icon Available Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#088EFD',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tbody td.yes i' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_responsive_control(
                'body_icon_size',
                [
                    'label' => esc_html__( 'Icon Size', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 16,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tbody td.yes i' => 'font-size: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tbody td.no i' => 'font-size: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'body_icon_no_color',
                [
                    'label' => esc_html__( 'Icon Not Available Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#141B34',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tbody td.no i' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->end_controls_section();

            $this->start_controls_section(
                'tfoot_style',
                [
                    'label' => esc_html__( 'Table Footer', 'uafe' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'footer_th_height',
                [
                    'label' => esc_html__( 'Th Height', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 100,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'footer_th_padding',
                [
                    'label' => esc_html__( 'Th Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 0,
                        'right' => 20,
                        'bottom' => 0,
                        'left' => 20,
                        'unit' => 'px',
                        'isLinked' => false,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'footer_title_color',
                [
                    'label' => esc_html__( 'Title Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#111010',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th:first-child' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'footer_title_typography',
                    'selector' => '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th:first-child',
                ]
            );

            $this->start_controls_tabs(
                'footer_button_style_tabs'
            );
            
            $this->start_controls_tab(
                'footer_button_style_normal_tab',
                [
                    'label' => esc_html__( 'Button Normal', 'uafe' ),
                ]
            );

            $this->add_control(
                'footer_button_color',
                [
                    'label' => esc_html__( 'Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#585656',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th button' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_control(
                'footer_button_bg_color',
                [
                    'label' => esc_html__( 'Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#E4F0FB',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th button' => 'background: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'footer_button_border',
                    'selector' => '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th button',
                ]
            );
            
            $this->end_controls_tab();

            $this->start_controls_tab(
                'footer_button_style_hover_tab',
                [
                    'label' => esc_html__( 'Button Hover', 'uafe' ),
                ]
            );

            $this->add_control(
                'footer_button_hover_color',
                [
                    'label' => esc_html__( 'Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#FBFBFB',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th button:hover' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_control(
                'footer_button_bg_hover_color',
                [
                    'label' => esc_html__( 'Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#088EFD',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th button:hover' => 'background: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'footer_button_hover_border',
                    'selector' => '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th button:hover',
                ]
            );
            
            $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'footer_button_typography',
                    'selector' => '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th button',
                ]
            );

            $this->add_control(
                'add_responsive_control',
                [
                    'label' => esc_html__( 'Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 8,
                        'right' => 20,
                        'bottom' => 8,
                        'left' => 20,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'footer_button_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 6,
                        'right' => 6,
                        'bottom' => 6,
                        'left' => 6,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-pricing-table-wrapper tfoot th button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->end_controls_section();

            // Style Tab End

        }

        protected function render() {
            $data = $this->get_settings_for_display();

            if ( ! empty( $data['basic_package_button_link']['url'] ) ) {
                $this->add_link_attributes( 'basic_package_button_link', $data['basic_package_button_link'] );
            }
            if ( ! empty( $data['standard_package_button_link']['url'] ) ) {
                $this->add_link_attributes( 'standard_package_button_link', $data['standard_package_button_link'] );
            }
            if ( ! empty( $data['premium_package_button_link']['url'] ) ) {
                $this->add_link_attributes( 'premium_package_button_link', $data['premium_package_button_link'] );
            }

            $id = $this->get_id();

            ?>
            <div class="uafe-pricing-table-wrapper">

            <table class="border">
              <thead>

                <tr>
                  <th class="title"><?php echo $data['pricing_plan']; ?></th>
                  <th class="package"><?php echo $data['currency'] . $data['basic_package_price']; ?> <span><?php echo $data['basic_package_title']; ?></span></th>
                  <th class="package"><?php echo $data['currency'] . $data['standard_package_price']; ?> <span><?php echo $data['standard_package_title']; ?></span></th>
                  <th class="package"><?php echo $data['currency'] . $data['premium_package_price']; ?> <span><?php echo $data['premium_package_title']; ?></span></th>
                </tr>

              </thead>
              <tbody>
                <?php if( $data['feature_list'] ): ?>
                    <?php foreach( $data['feature_list'] as $key => $list):

                        if ( ! empty( $list['button_link']['url'] ) ) {
                            $this->add_link_attributes( "link_{$key}", $list['button_link'] );
                        }
                    ?>

                      <tr>
                        <td> <?php echo $list['feature_title']; ?> </td>
                        <td class="<?php echo $list['feature_y_n_1'] == 'yes' ? 'yes' : 'no'; ?>"> <?php \Elementor\Icons_Manager::render_icon( $list['feature_y_n_icon_1'], [ 'aria-hidden' => 'true' ] ); ?></td>
                        <td class="<?php echo $list['feature_y_n_2'] == 'yes' ? 'yes' : 'no'; ?>" > <?php \Elementor\Icons_Manager::render_icon( $list['feature_y_n_icon_2'], [ 'aria-hidden' => 'true' ] ); ?></td>
                        <td class="<?php echo $list['feature_y_n_3'] == 'yes' ? 'yes' : 'no'; ?>"> <?php \Elementor\Icons_Manager::render_icon( $list['feature_y_n_icon_3'], [ 'aria-hidden' => 'true' ] ); ?></td>
                      </tr>
                        
                    <?php endforeach;  ?>
                <?php endif; ?>

                </tbody>
                <tfoot>
                  <tr>
                    <th><?php echo $data['footer_text']; ?></th>
                    <th><a <?php $this->print_render_attribute_string( 'basic_package_button_link' ); ?> ><button><?php echo $data['basic_package_button_text']; ?></button></a></th>
                    <th><a <?php $this->print_render_attribute_string( 'standard_package_button_link' ); ?> ><button><?php echo $data['standard_package_button_text']; ?></button></a></th>
                    <th><a <?php $this->print_render_attribute_string( 'premium_package_button_link' ); ?> ><button><?php echo $data['premium_package_button_text']; ?></button></a></th>
                  </tr>
                </tfoot>

              </table>

            </div>

            <?php
        }
    }

?>
