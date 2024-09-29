<?php

    class UAFE_3D_Social_Icon extends \Elementor\Widget_Base {

        public function get_name() {
            return 'uafe-dual-heading';
        }

        public function get_title() {
            return esc_html__( 'Useful Addon 3D Social Icon', 'uafe' );
        }

        public function get_icon() {
            return 'eicon-plug';
        }

        public function get_categories() {
            return [ 'uafe' ];
        }

        public function get_keywords() {
            return [ 'icons', '3d-icon', 'social-icon', '3d-social-icon', 'social-share' ];
        }

        public function get_style_depends() {
            return [ 'uafe-3d-social-icon' ];
        }

        protected function register_controls() {

            // Content Tab Start

            $this->start_controls_section(
                'section_content',
                [
                    'label' => esc_html__( 'Content', 'uafe' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );

            $this->add_control(
                'layer',
                [
                    'label' => esc_html__( 'Layer', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 4,
                    'step' => 1,
                    'default' => 3,
                ]
            );

            $repeater = new \Elementor\Repeater();

            

            $repeater->add_control(
                'title',
                [
                    'label' => esc_html__( 'Title', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Facebook', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );
            $repeater->add_control(
                'icon',
                [
                    'label' => esc_html__( 'Icon', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fab fa-facebook-f',
                        'library' => 'fa-brands',
                    ],
                ]
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
            $repeater->add_control(
                'before_color',
                [
                    'label' => esc_html__( 'Before Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#000',
                    'selectors' => [
                        '{{WRAPPER}} {{CURRENT_ITEM}}.uafe-3d-social-icon:before' => 'background: {{VALUE}}',
                    ],
                ]
            );
            $repeater->add_control(
                'after_color',
                [
                    'label' => esc_html__( 'after Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#000',
                    'selectors' => [
                        '{{WRAPPER}} {{CURRENT_ITEM}}.uafe-3d-social-icon:after' => 'background: {{VALUE}}',
                    ],
                ]
            );
            $repeater->add_control(
                'background_color',
                [
                    'label' => esc_html__( 'Background Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#000',
                    'selectors' => [
                        '{{WRAPPER}} {{CURRENT_ITEM}}.uafe-3d-social-icon .layer' => 'background: {{VALUE}}',
                    ],
                ]
            );
            $repeater->add_control(
                'background_hover_color',
                [
                    'label' => esc_html__( 'Background Hover', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} {{CURRENT_ITEM}}.uafe-3d-social-icon:hover .layer' => 'background: {{VALUE}} !important',
                    ],
                ]
            );
            $repeater->add_control(
                'icon_color',
                [
                    'label' => esc_html__( 'Icon Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} {{CURRENT_ITEM}}.uafe-3d-social-icon .layer' => 'color: {{VALUE}} !important',
                    ],
                ]
            );
            $repeater->add_control(
                'icon_hover_color',
                [
                    'label' => esc_html__( 'Icon Hover Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} {{CURRENT_ITEM}}.uafe-3d-social-icon:hover .layer' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_control(
                'list',
                [
                    'label' => esc_html__( 'Icon List', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'title' => esc_html__( 'Facebook', 'uafe' ),
                            'icon' => [
                                'value' => 'fab fa-facebook-f',
                                'library' => 'fa-brands',
                            ],
                            'link' => [
                                'url' => '#',
                            ]
                        ],
                        [
                            'title' => esc_html__( 'Twitter', 'uafe' ),
                            'icon' => [
                                'value' => 'fab fa-twitter',
                                'library' => 'fa-brands',
                            ],
                            'link' => [
                                'url' => '#',
                            ],
                        ],
                        [
                            'title' => esc_html__( 'Instagram', 'uafe' ),
                            'icon' => [
                                'value' => 'fab fa-instagram',
                                'library' => 'fa-brands',
                            ],
                            'link' => [
                                'url' => '#',
                            ],
                        ],
                        [
                            'title' => esc_html__( 'LinkedIn', 'uafe' ),
                            'icon' => [
                                'value' => 'fab fa-linkedin-in',
                                'library' => 'fa-brands',
                            ],
                            'link' => [
                                'url' => '#',
                            ],
                        ],
                    ],
                    'title_field' => '<i class="{{icon.value}}"></i> {{{ title }}}',
                ]
            );


            $this->end_controls_section();


            // Style Tab Start

            $this->start_controls_section(
                'section_layout',
                [
                    'label' => esc_html__( 'Layout Style', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'layout',
                [
                    'label' => esc_html__( 'Layout', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::CHOOSE,
                    'options' => [
                        'flex' => [
                            'title' => esc_html__( 'Inline', 'textdomain' ),
                            'icon' => 'eicon-ellipsis-h',
                        ],
                        'grid' => [
                            'title' => esc_html__( 'List', 'textdomain' ),
                            'icon' => 'eicon-editor-list-ul',
                        ],
                    ],
                    'default' => 'flex',
                    'toggle' => true,
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-social-icon-wrapper ul' => 'display: {{VALUE}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'gap',
                [
                    'label' => esc_html__( 'Gap', 'uafe' ),
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
                        'size' => 40,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-social-icon-wrapper ul' => 'gap: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'width',
                [
                    'label' => esc_html__( 'Width', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 300,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 60,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-social-icon-wrapper li' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'height',
                [
                    'label' => esc_html__( 'Height', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 300,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 60,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-social-icon-wrapper li' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'transform_skew',
                [
                    'label' => esc_html__( 'Transform Skew', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'deg' ],
                    'range' => [
                        'deg' => [
                            'min' => -50,
                            'max' => 50,
                        ],
                    ],
                    'default' => [
                        'unit' => 'deg',
                        'size' => 0,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-social-icon-wrapper ul' => 'transform: rotate(0deg) skew({{SIZE}}{{UNIT}}) !important;',
                    ],
                ]
            );

            $this->add_responsive_control(
                'icon_size',
                [
                    'label' => esc_html__( 'Icon Size', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 100,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 30,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-3d-social-icon-wrapper li .layer' => 'font-size: {{SIZE}}{{UNIT}} !important',
                    ],
                ]
            );
    
            $this->end_controls_section();

            // Style Tab End

        }

        protected function render() {

            $data = $this->get_settings_for_display();

            $id = $this->get_id();

            ?>
            <div class="uafe-3d-social-icon-wrapper">

                <ul> 
                    <?php 
                        foreach( $data['list'] as $key => $list ):

                        $url = 'link_' . $key;

                        if ( ! empty( $list['link']['url'] ) ) {
                            $this->add_link_attributes( $url, $list['link'] );
                        }

                        $class = 'class_' . $key;
                        $this->add_render_attribute( $class, 'class', [
                            'uafe-3d-social-icon',
                            'uafe-3d-social-icon-' . $list['title'] .'-'. $list['_id'],
                            'elementor-repeater-item-' . $list['_id'],
                        ] );
                    ?>
                        
                    <li <?php $this->print_render_attribute_string( $class ); ?>>
                    <a <?php $this->print_render_attribute_string( $url ); ?> >
                        <?php for($i = 0; $i < $data['layer']; $i++): ?>
                        <span class="layer"></span>
                        <?php endfor; ?>
                        <span class="layer <?php echo $list['icon']['value']?>"></span>
                        
                    </a> 
                    </li>
                    <?php endforeach; ?>
                </ul>  

            </div>

            <?php
        }

    }

?>





