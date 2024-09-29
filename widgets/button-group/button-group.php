<?php

    class UAFE_Button_Group extends \Elementor\Widget_Base {

        public function get_name() {
            return 'uafe-button-group';
        }

        public function get_title() {
            return esc_html__( 'Useful Addon Button Group', 'uafe' );
        }

        public function get_icon() {
            return 'eicon-dual-button';
        }

        public function get_categories() {
            return [ 'uafe' ];
        }

        public function get_keywords() {
            return [ 'button', 'button-group', 'link', 'button-link', 'url', 'dual-button' ];
        }

        public function get_style_depends() {
            return [ 'uafe-button-group' ];
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
                'button_text',
                [
                    'label' => esc_html__( 'Button Text', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Button', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $repeater->add_control(
                'button_icon',
                [
                    'label' => esc_html__( 'Icon', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-location-arrow',
                        'library' => 'fa-solid',
                    ],
                ]
            );

            $repeater->add_control(
                'button_link',
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
                    'label' => esc_html__( 'Button Group', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'button_text' => esc_html__( 'Button #1', 'uafe' ),
                            'button_icon' => [
                                'value' => 'fas fa-location-arrow',
                                'library' => 'fa-solid',
                            ],
                            'button_link' => [
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
                    ],
                    'title_field' => '{{{ button_text }}}',
                ]
            );

            $this->end_controls_section();

            // Style Tab Start

            $this->start_controls_section(
                'section_style',
                [
                    'label' => esc_html__( 'Layout Style', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
                'style_notice',
                [
                    'type' => \Elementor\Controls_Manager::NOTICE,
                    'notice_type' => 'warning',
                    'dismissible' => true,
                    'heading' => esc_html__( 'Style Notice', 'uafe' ),
                    'content' => esc_html__( 'If won\'t see any changes, don\'t worry it will be changed in page', 'uafe' ),
                ]
            );

            $this->add_responsive_control(
                'layout_padding',
                [
                    'label' => esc_html__( 'Layout Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 20,
                        'right' => 0,
                        'bottom' => 20,
                        'left' => 0,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-marquee-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
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
                        'size' => 120,
                    ],
                    'selectors' => [
					    '{{WRAPPER}} .uafe-marquee-wrapper ul li' => 'width: {{SIZE}}{{UNIT}};',
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
                        'size' => 120,
                    ],
                    'selectors' => [
					    '{{WRAPPER}} .uafe-marquee-wrapper ul li' => 'height: {{SIZE}}{{UNIT}};',
				    ],
                ]
            );

            $this->add_control(
                'item_bg_color',
                [
                    'label' => esc_html__( 'Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#80808000',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-marquee-wrapper ul li' => 'background: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'item_box_shadow',
                    'selector' => '{{WRAPPER}} .uafe-marquee-wrapper ul li',
                ]
            );

            $this->add_responsive_control(
                'item_padding',
                [
                    'label' => esc_html__( 'Item Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 15,
                        'right' => 15,
                        'bottom' => 15,
                        'left' => 15,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-marquee-wrapper ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'item_border',
                    'selector' => '{{WRAPPER}} .uafe-marquee-wrapper ul li',
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
                        '{{WRAPPER}} .uafe-marquee-wrapper ul li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->end_controls_section();

            $this->start_controls_section(
                'image_style',
                [
                    'label' => esc_html__( 'Image Style', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
                'image_width_style',
                [
                    'label' => esc_html__( 'Select Width', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'auto',
                    'options' => [
                        'auto' => esc_html__( 'Auto', 'uafe' ),
                        'custom' => esc_html__( 'Custom', 'uafe' ),
                    ],
                    
                ]
            );

            $this->add_control(
                'image_width',
                [
                    'label' => esc_html__( 'Width', 'uafe' ),
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
                        'unit' => '%',
                        'size' => 100,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-marquee-wrapper ul li img' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                    'condition' => [
                        'image_width_style' => 'custom',
                    ],
                ]
            );

            $this->add_control(
                'image_height_style',
                [
                    'label' => esc_html__( 'Select Height', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'auto',
                    'options' => [
                        'auto' => esc_html__( 'Auto', 'uafe' ),
                        'custom' => esc_html__( 'Custom', 'uafe' ),
                    ],
                    
                ]
            );

            $this->add_control(
                'image_height',
                [
                    'label' => esc_html__( 'Height', 'uafe' ),
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
                        'unit' => '%',
                        'size' => 100,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-marquee-wrapper ul li img' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                    'condition' => [
                        'image_height_style' => 'custom',
                    ],
                ]
            );

            $this->add_responsive_control(
                'image_border_radius',
                [
                    'label' => esc_html__( 'Boder Radius', 'uafe' ),
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
                        '{{WRAPPER}} .uafe-marquee-wrapper ul li a img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            <div class="uafe-button-group-wrapper">

                <?php if( $data['list'] ): ?>
                    <?php foreach( $data['list'] as $key => $list):

                        if ( ! empty( $list['button_link']['url'] ) ) {
                            $this->add_link_attributes( "link_{$key}", $list['button_link'] );
                        }
                    ?>

                    <a <?php $this->print_render_attribute_string( "link_{$key}" ); ?>>
                        <div class="uafe-button-group-single button-29 uafe-button-group-list-<?php echo esc_attr( $list['_id'] ); ?>">
                            <span class="button-text"><?php echo $list['button_text']; ?></span>
                            <?php \Elementor\Icons_Manager::render_icon( $list['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </div>
                    </a>

                    <?php endforeach;  ?>
                <?php endif; ?>

            </div>

            <script>
                (function( $ ) {

                    $(function() {

                       
                    });

                })( jQuery );
            </script>
            <?php
        }
    }

?>
