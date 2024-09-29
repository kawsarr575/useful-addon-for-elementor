<?php

    class UAFE_3D_Rotated_Carousel extends \Elementor\Widget_Base {

        public function get_name() {
            return '3d-rotated-carousel';
        }

        public function get_title() {
            return esc_html__( 'Useful Addon 3D Rotated Carousel', 'elementor-addon' );
        }

        public function get_icon() {
            return 'eicon-slider-push';
        }

        public function get_categories() {
            return [ 'uafe' ];
        }

        public function get_keywords() {
            return [ 'image-marquee', 'loop-image', 'logo-marquee', 'loop', 'slider', 'carousel' ];
        }

        public function get_style_depends() {
            return [ 'uafe-3d-rotated-carousel' ];
        }

        public function get_script_depends() {
            return [ 'uafe-3d-rotated-carousel' ];
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
                'slider_notice',
                [
                    'type' => \Elementor\Controls_Manager::NOTICE,
                    'notice_type' => 'warning',
                    'dismissible' => true,
                    'heading' => esc_html__( 'Slider Notice', 'uafe' ),
                    'content' => esc_html__( 'You need add 6 images or make 6 item by dulicating or reduce parent div width if slider is not working', 'uafe' ),
                ]
            );

            $repeater = new \Elementor\Repeater();

            $repeater->add_control(
                'title',
                [
                    'label' => esc_html__( 'Title', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Default title', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );
            $repeater->add_control(
                'image',
                [
                    'label' => esc_html__( 'Choose Image', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'dynamic' => [
                        'active' => true,
                    ],
                ],
            );
            $repeater->add_control(
                'link',
                [
                    'label' => esc_html__( 'Link', 'uafe' ),
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

            $this->add_control(
                'list',
                [
                    'label' => esc_html__( 'Image List', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'title' => esc_html__( 'Title #1', 'uafe' ),
                            'image' => [
                                'url' => \Elementor\Utils::get_placeholder_image_src(),
                            ],
                            'link' => [
                                'url' => '',
                            ]
                        ],
                        [
                            'title' => esc_html__( 'Title #2', 'uafe' ),
                            'image' => [
                                'url' => \Elementor\Utils::get_placeholder_image_src(),
                            ],
                            'link' => [
                                'url' => '',
                            ]
                        ],
                        [
                            'title' => esc_html__( 'Title #3', 'uafe' ),
                            'image' => [
                                'url' => \Elementor\Utils::get_placeholder_image_src(),
                            ],
                            'link' => [
                                'url' => '',
                            ]
                        ],
                        [
                            'title' => esc_html__( 'Title #4', 'uafe' ),
                            'image' => [
                                'url' => \Elementor\Utils::get_placeholder_image_src(),
                            ],
                            'link' => [
                                'url' => '',
                            ]
                        ],
                        [
                            'title' => esc_html__( 'Title #5', 'uafe' ),
                            'image' => [
                                'url' => \Elementor\Utils::get_placeholder_image_src(),
                            ],
                            'link' => [
                                'url' => '',
                            ]
                        ],
                        [
                            'title' => esc_html__( 'Title #6', 'uafe' ),
                            'image' => [
                                'url' => \Elementor\Utils::get_placeholder_image_src(),
                            ],
                            'link' => [
                                'url' => '',
                            ]
                        ],
                    ],
                    'title_field' => '{{{ title }}}',
                ]
            );

            $this->end_controls_section();


            /**
             * Start Settings
             */
            $this->start_controls_section(
                'slider_setting',
                [
                    'label' => esc_html__( 'Settings', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );
            
            $this->add_responsive_control(
                'perspective',
                [
                    'label' => esc_html__( 'Custom Perspective', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1920,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 1100,
                    ],
                ]
            );
            
            $this->add_control(
                'auto_play',
                [
                    'label' => esc_html__( 'Slider AutoPlay', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => esc_html__( 'No', 'uafe' ),
                    'label_off' => esc_html__( 'Yes', 'uafe' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $this->add_control(
                'direction',
                [
                    'label' => esc_html__( 'Select Direction', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'prev',
                    'options' => [
                        'next' => esc_html__( 'Left', 'uafe' ),
                        'prev' => esc_html__( 'Right', 'uafe' ),
                    ],
                ]
            );

            $this->add_control(
                'transition_delay',
                [
                    'label' => esc_html__( 'Transition Delay', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 100,
                    'max' => 10000,
                    'step' => 100,
                    'default' => 1500,
                ]
            );

            $this->add_control(
                'speed',
                [
                    'label' => esc_html__( 'Slide Speed', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 100,
                    'max' => 100000,
                    'step' => 100,
                    'default' => 2000
                ]
            );

            $this->add_control(
                'moveOnSlideClick',
                [
                    'label' => esc_html__( 'Move On Slide Click', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => esc_html__( 'No', 'uafe' ),
                    'label_off' => esc_html__( 'Yes', 'uafe' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $this->add_control(
                'slideFrontFace',
                [
                    'label' => esc_html__( 'Slide Front Face', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => esc_html__( 'No', 'uafe' ),
                    'label_off' => esc_html__( 'Yes', 'uafe' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                ]
            );

            $this->add_responsive_control(
                'slide_margin',
                [
                    'label' => esc_html__( 'Margin', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 500,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 100,
                    ],
                ]
            );

            $this->end_controls_section();

            /**
             * slider nav Settings
             */
            $this->start_controls_section(
                'slider_Navigation',
                [
                    'label' => esc_html__( 'Navigation Settings', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );

            $this->add_control(
                'select_nav',
                [
                    'label' => esc_html__( 'Select Nav', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'icon',
                    'options' => [
                        'none' => esc_html__( 'None', 'uafe' ),
                        'text' => esc_html__( 'Text', 'uafe' ),
                        'icon' => esc_html__( 'Icon', 'uafe' ),
                        'icon_text' => esc_html__( 'Icon + Text', 'uafe' ),
                    ],
                ]
            );

            $this->add_control(
                'prev_text',
                [
                    'label' => esc_html__( 'Prev Text', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Prev', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your prev here', 'uafe' ),
                    'conditions' => [
                        'relation' => 'or',
                        'terms' => [
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'text',
                            ],
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'icon_text',
                            ],
                        ],
                    ],
                ]
            );

            $this->add_control(
                'next_text',
                [
                    'label' => esc_html__( 'Next Text', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Next', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your next here', 'uafe' ),
                    'conditions' => [
                        'relation' => 'or',
                        'terms' => [
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'text',
                            ],
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'icon_text',
                            ],
                        ],
                    ],
                ]
            );

            $this->add_control(
                'prev_icon',
                [
                    'label' => esc_html__( 'Prev Icon', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'skin' => 'inline',
                    'label_block' => false,
                    'default' => [
                        'value' => 'eicon-angle-right',
                        'library' => 'fa-solid',
                    ],
                    'conditions' => [
                        'relation' => 'or',
                        'terms' => [
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'icon',
                            ],
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'icon_text',
                            ],
                        ],
                    ],
                ]
            );

            $this->add_control(
                'next_icon',
                [
                    'label' => esc_html__( 'Next Icon', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'skin' => 'inline',
                    'label_block' => false,
                    'default' => [
                        'value' => 'eicon-angle-left',
                        'library' => 'fa-solid',
                    ],
                    'conditions' => [
                        'relation' => 'or',
                        'terms' => [
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'icon',
                            ],
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'icon_text',
                            ],
                        ],
                    ],
                ]
            );

            $this->end_controls_section();

            /**
             * End Settings
             */


            // Style Tab Start

            $this->start_controls_section(
                'section_style',
                [
                    'label' => esc_html__( 'Layout Style', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'item_width',
                [
                    'label' => esc_html__( 'Item Width', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 200,
                    ],
                    'selectors' => [
					    '{{WRAPPER}} ..uafe-3d-rotated-carousel-single' => 'width: {{SIZE}}{{UNIT}};',
				    ],
                ]
            );

            $this->add_responsive_control(
                'item_height',
                [
                    'label' => esc_html__( 'Item Height', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 200,
                    ],
                    'selectors' => [
					    '{{WRAPPER}} .uafe-3d-rotated-carousel-single' => 'height: {{SIZE}}{{UNIT}};',
					    '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper ul' => 'height: {{SIZE}}{{UNIT}};',
				    ],
                ]
            );

            $this->add_control(
                'item_bg_color',
                [
                    'label' => esc_html__( 'Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#ffffff',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-single' => 'background: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'item_box_shadow',
                    'selector' => '{{WRAPPER}} .uafe-3d-rotated-carousel-single',
                ]
            );

            $this->add_responsive_control(
                'item_padding',
                [
                    'label' => esc_html__( 'Item Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 20,
                        'right' => 20,
                        'bottom' => 20,
                        'left' => 20,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-single' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'item_border',
                    'selector' => '{{WRAPPER}} .uafe-3d-rotated-carousel-single',
                ]
            );

            $this->add_responsive_control(
                'item_border_radius',
                [
                    'label' => esc_html__( 'Item Boder Radius', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 5,
                        'right' => 5,
                        'bottom' => 5,
                        'left' => 5,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-single' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->end_controls_section();

            $this->start_controls_section(
                'nav_style',
                [
                    'label' => esc_html__( 'Navigation Bar', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'nav_width',
                [
                    'label' => esc_html__( 'Nav Width', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 500,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 30,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.prev' => 'width: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.next' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'nav_height',
                [
                    'label' => esc_html__( 'Nav Heigh', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 500,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 30,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.prev' => 'height: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.next' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'nav_gap',
                [
                    'label' => esc_html__( 'Between Space', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 500,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 30,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control' => 'gap: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'nav_margin',
                [
                    'label' => esc_html__( 'Margin', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 30,
                        'right' => 0,
                        'bottom' => 0,
                        'left' => 0,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'nav_border_radius',
                [
                    'label' => esc_html__( 'Boder Radius', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 50,
                        'right' => 50,
                        'bottom' => 50,
                        'left' => 50,
                        'unit' => '%',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'nav_typography',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.prev',
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.next',
                    ],
                    'conditions' => [
                        'relation' => 'or',
                        'terms' => [
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'text',
                            ],
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'icon_text',
                            ],
                        ],
                    ],
                ]
            );

            $this->add_responsive_control(
                'nav_icon_size_gap',
                [
                    'label' => esc_html__( 'Icon Size', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 500,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 20,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.prev i' => 'font-size: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.next i' => 'font-size: {{SIZE}}{{UNIT}};',
                    ],
                    'conditions' => [
                        'relation' => 'or',
                        'terms' => [
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'icon',
                            ],
                            [
                                'name' => 'select_nav',
                                'operator' => '==',
                                'value' => 'icon_text',
                            ],
                        ],
                    ],
                ]
            );
    
            $this->start_controls_tabs(
                'style_nav'
            );

            $this->start_controls_tab(
                'style_normal_nav',
                [
                    'label' => esc_html__( 'Normal', 'uafe' ),
                ]
            );

            $this->add_control(
                'nav_bg_color',
                [
                    'label' => esc_html__( 'Background Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.prev' => 'background: {{VALUE}}',
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.next' => 'background: {{VALUE}}',
                    ],
                ]
            );

            $this->add_control(
                'nav_color',
                [
                    'label' => esc_html__( 'Text Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.prev' => 'color: {{VALUE}}',
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper .jas-control a.next' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_control(
                'prev_nav_border_label',
                [
                    'label' => esc_html__( 'Prev Nav Border', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'nav_prev_border',
                    'selector' => '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.prev',
                ]
            );

            $this->add_control(
                'next_nav_border_label',
                [
                    'label' => esc_html__( 'Next Nav Border', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'nav_next_border',
                    'selector' => '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.next',
                ]
            );

            $this->end_controls_tab();

            $this->start_controls_tab(
                'style_hover_nav',
                [
                    'label' => esc_html__( 'Hover', 'uafe' ),
                ]
            );

            $this->add_control(
                'nav_bg_hover_color',
                [
                    'label' => esc_html__( 'Background Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.prev:hover' => 'background: {{VALUE}}',
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.next:hover' => 'background: {{VALUE}}',
                    ],
                ]
            );

            $this->add_control(
                'nav_hover_color',
                [
                    'label' => esc_html__( 'Text Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.prev:hover' => 'color: {{VALUE}}',
                        '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.next:hover' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_control(
                'prev_nav_hover_border_label',
                [
                    'label' => esc_html__( 'Prev Nav Border', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'nav_prev_hover_border',
                    'selector' => '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.prev:hover',
                     
                ]
            );

            $this->add_control(
                'next_nav_hover_border_label',
                [
                    'label' => esc_html__( 'Next Nav Border', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'nav_next_hover_border',
                    'selector' => '{{WRAPPER}} .uafe-3d-rotated-carousel-wrapper a.next:hover',
                     
                ]
            );

            $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->end_controls_section();

            // Style Tab End

        }

        protected function render() {
            $data = $this->get_settings_for_display();

            $id = $this->get_id();

            ?>
            <div class="uafe-3d-rotated-carousel-wrapper">
                <?php if( $data['list'] ): ?>
                <ul class="uafe-3d-rotated-carousel-<?php echo $id; ?>">
                    <?php foreach( $data['list'] as $key => $list):

                        if ( ! empty( $list['link']['url'] ) ) {
                            $this->add_link_attributes( "link_{$key}", $list['link'] );
                        }
                    ?>

                        <li class="uafe-3d-rotated-carousel-single">
                            <a <?php $this->print_render_attribute_string("link_{$key}"); ?>> <img src="<?php echo $list['image']['url']; ?>" alt=""> </a>
                        </li>

                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>

            <script>
                (function( $ ) {

                    $(document).ready(function() {
         
                        $(".uafe-3d-rotated-carousel-<?php echo $id; ?>").jasCarousel({

                            // or 'vertical'
                            mode: 'horizontal',

                            // custom perspective
                            perspective: <?php echo $data['perspective']['size']; ?>,

                            // autoplay
                            auto: <?php if('yes' == $data['auto_play']){ echo 'true'; }else{ echo 'false'; } ?>,

                            // autoplay direction
                            autoDirection: "<?php echo $data['direction']; ?>",

                            // transition delay
                            delay: <?php echo $data['transition_delay']; ?>,

                            // animation speed
                            speed: <?php echo $data['speed']; ?>,

                             // move on slide click?
                            moveOnSlideClick: <?php if('yes' === $data['moveOnSlideClick']){ echo 'true'; }else{ echo 'false'; } ?>,

                            // slide front face?
                            slideFrontFace: <?php if('yes' === $data['slideFrontFace']){ echo 'true'; }else{ echo 'false'; } ?>,

                            // margin in pixels
                            margin: <?php echo $data['slide_margin']['size']; ?>,


                            // navigation options
                            navigation: <?php if('none' === $data['select_nav']){ echo 'false'; }else{ echo 'true'; } ?>,
                            prevText: '<?php echo $data['prev_text']; ?> <?php \Elementor\Icons_Manager::render_icon( $data["next_icon"], [ "aria-hidden" => "true" ] );?>',
                            nextText: '<?php \Elementor\Icons_Manager::render_icon( $data["prev_icon"], [ "aria-hidden" => "true" ] ); ?> <?php echo $data['next_text']; ?>',

                        });
                    });

                })( jQuery );
            </script>
            <?php
        }
    }

?>
