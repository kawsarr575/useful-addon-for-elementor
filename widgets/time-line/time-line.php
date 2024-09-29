<?php

    class UAFE_TimeLine extends \Elementor\Widget_Base {

        public function get_name() {
            return 'uafe-time-line';
        }

        public function get_title() {
            return esc_html__( 'Useful Addon Time Line', 'uafe' );
        }

        public function get_icon() {
            return 'eicon-plug';
        }

        public function get_categories() {
            return [ 'uafe' ];
        }

        public function get_keywords() {
            return [ 'time-line', 'time', 'line' ];
        }

        public function get_style_depends() {
            return [ 'uafe-time-line' ];
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

            $repeater = new \Elementor\Repeater();

            $repeater->add_control(
                'title',
                [
                    'label' => esc_html__( 'Title', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Usefull Addon Title', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your title here', 'uafe' ),
                ],
            );

            $repeater->add_control(
                'date',
                [
                    'label' => esc_html__( 'date', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Dec 2014', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your date', 'uafe' ),
                ],
            );
    
            $repeater->add_control(
                'text',
                [
                    'label' => esc_html__( 'Description', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                    'default' => esc_html__( 'Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore aliquip enim cupidatat laborum dolore.', 'uafe' ),
                    'placeholder' => esc_html__( 'Type your description here', 'uafe' ),
                ]
            );

            $this->add_control(
                'list',
                [
                    'label' => esc_html__( 'Time Line', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'title' => esc_html__( 'Useful Addon Title One', 'uafe' ),
                            'date' => 'Dec 2014',
                            'text' => esc_html__( 'Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore aliquip enim cupidatat laborum dolore.', 'uafe' ),
                        ],
                        [
                            'title' => esc_html__( 'Useful Addon Title Two', 'uafe' ),
                            'date' => 'Dec 2015',
                            'text' => esc_html__( 'Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore aliquip enim cupidatat laborum dolore.', 'uafe' ),
                        ],
                        [
                            'title' => esc_html__( 'Useful Addon Title Three', 'uafe' ),
                            'date' => 'Dec 2016',
                            'text' => esc_html__( 'Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore aliquip enim cupidatat laborum dolore.', 'uafe' ),
                        ],
                        [
                            'title' => esc_html__( 'Useful Addon Title Four', 'uafe' ),
                            'date' => 'Dec 2017',
                            'text' => esc_html__( 'Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore aliquip enim cupidatat laborum dolore.', 'uafe' ),
                        ],
                    ],
                    'title_field' => '{{{ title }}}',
                ]
            );

            $this->end_controls_section();


            // Style Tab Start

            $this->start_controls_section(
                'section_style',
                [
                    'label' => esc_html__( 'Layout', 'uafe' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
                'hexa_color',
                [
                    'label' => esc_html__( 'Hexa Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#00c4f3',
                    'selectors' => [
					    '{{WRAPPER}} .uafe-timeline-wrapper ul .hexa' => 'background: {{value}};',
					    '{{WRAPPER}} .uafe-timeline-wrapper ul .hexa:before' => 'border-bottom-color: {{value}};',
					    '{{WRAPPER}} .uafe-timeline-wrapper ul .hexa:after' => 'border-top-color: {{value}};',
				    ],
                ]
            );

            $this->add_responsive_control(
                'line_width',
                [
                    'label' => esc_html__( 'Timeline Width', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 10,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 2,
                    ],
                    'selectors' => [
					    '{{WRAPPER}} .uafe-timeline-wrapper ul:before' => 'width: {{SIZE}}{{UNIT}};',
				    ],
                ]
            );

            $this->add_responsive_control(
                'line_position',
                [
                    'label' => esc_html__( 'Timeline Position', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => -5,
                            'max' => 5,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => -1,
                    ],
                    'selectors' => [
					    '{{WRAPPER}} .uafe-timeline-wrapper ul:before' => 'margin-left: {{SIZE}}{{UNIT}};',
				    ],
                ]
            );

            $this->add_control(
                'line_color_one',
                [
                    'label' => esc_html__( 'Timeline Color One', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => 'rgb(213, 213, 213)',
                ]
            );

            $this->add_responsive_control(
                'location_a',
                [
                    'label' => esc_html__( 'Timeline Location One', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ '%'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => '%',
                        'size' => 8,
                    ],
                ]
            );

            $this->add_control(
                'line_color_two',
                [
                    'label' => esc_html__( 'Timeline Color two', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => 'rgb(213, 213, 213)',
                ]
            );

            $this->add_responsive_control(
                'location_b',
                [
                    'label' => esc_html__( 'Timeline Location Two', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ '%'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => '%',
                        'size' => 92,
                    ],
                ]
            );

            $this->add_control(
                'item_padding',
                [
                    'label' => esc_html__( 'Item Padding', 'uafe' ),
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
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->end_controls_section();

            /**
             * Start Title style
             */
            $this->start_controls_section(
                'title_style',
                [
                    'label' => esc_html__( 'Title', 'uafe' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
                'title_color',
                [
                    'label' => esc_html__( 'Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .flag' => 'color: {{value}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'title_typography',
                    'selector' => '{{WRAPPER}} .uafe-timeline-wrapper .timeline .flag',
                ]
            );

            $this->add_control(
                'title_background',
                [
                    'label' => esc_html__( 'Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#0c0d0e',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .flag' => 'Background: {{value}};',
                    ],
                ]
            );
            
            $this->add_control(
                'track',
                [
                    'label' => esc_html__( 'Track', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#0c0d0e',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-l .flag:after' => 'border-left-color: {{value}};',
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-r .flag:after' => 'border-right-color: {{value}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'title_border',
                    'selector' => '{{WRAPPER}} .uafe-timeline-wrapper .timeline .flag',
                ]
            );

            $this->add_responsive_control(
                'title_padding',
                [
                    'label' => esc_html__( 'Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 6,
                        'right' => 10,
                        'bottom' => 6,
                        'left' => 10,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .flag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'title_space',
                [
                    'label' => esc_html__( 'Space Between', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 0,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-l .flag' => 'margin-right: {{SIZE}}{{UNIT}}',
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-r .flag' => 'margin-left: {{SIZE}}{{UNIT}}',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'title_box_shadow',
                    'selector' => '{{WRAPPER}} .uafe-timeline-wrapper .timeline .flag',
                ]
            );

            $this->add_responsive_control(
                'title_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'uafe' ),
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
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .flag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->end_controls_section();

            /**
             * Start Time style
             */
            $this->start_controls_section(
                'time_style',
                [
                    'label' => esc_html__( 'Time', 'uafe' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
                'time_color',
                [
                    'label' => esc_html__( 'Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .time' => 'color: {{value}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'time_typography',
                    'selector' => '{{WRAPPER}} .uafe-timeline-wrapper .timeline .time',
                ]
            );

            $this->add_control(
                'time_background',
                [
                    'label' => esc_html__( 'Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#00c4f3',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .time' => 'Background: {{value}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'time_border',
                    'selector' => '{{WRAPPER}} .uafe-timeline-wrapper .timeline .time',
                ]
            );

            $this->add_responsive_control(
                'time_padding',
                [
                    'label' => esc_html__( 'Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 5,
                        'right' => 10,
                        'bottom' => 5,
                        'left' => 10,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'time_space',
                [
                    'label' => esc_html__( 'Time Gap', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 0,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-l .time' => 'margin-right: {{SIZE}}{{UNIT}}',
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-r .time' => 'margin-left: {{SIZE}}{{UNIT}}',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'time_box_shadow',
                    'selector' => '{{WRAPPER}} .uafe-timeline-wrapper .timeline .time',
                ]
            );

            $this->add_responsive_control(
                'time_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 0,
                        'right' => 0,
                        'bottom' => 0,
                        'left' => 0,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .time' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->end_controls_section();
            /**
             * Start Description style
             */
            $this->start_controls_section(
                'desc_style',
                [
                    'label' => esc_html__( 'Description', 'uafe' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
                'desc_color',
                [
                    'label' => esc_html__( 'Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .desc' => 'color: {{value}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'desc_typography',
                    'selector' => '{{WRAPPER}} .uafe-timeline-wrapper .timeline .desc',
                ]
            );

            $this->add_control(
                'desc_background',
                [
                    'label' => esc_html__( 'Background', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#00c4f3',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .desc' => 'Background: {{value}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'desc_border',
                    'selector' => '{{WRAPPER}} .uafe-timeline-wrapper .timeline .desc',
                ]
            );

            $this->add_responsive_control(
                'desc_padding',
                [
                    'label' => esc_html__( 'Padding', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 5,
                        'right' => 10,
                        'bottom' => 5,
                        'left' => 10,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'desc_margin',
                [
                    'label' => esc_html__( 'Gap', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 0,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-l .desc' => 'margin-right: {{SIZE}}{{UNIT}}',
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-r .desc' => 'margin-left: {{SIZE}}{{UNIT}}',
                    ],
                ]
            );

            $this->add_responsive_control(
                'desc_margin_top',
                [
                    'label' => esc_html__( 'Top Gap', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', 'rem', 'custom' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 1,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 16,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-l .desc' => 'margin-top: {{SIZE}}{{UNIT}}',
                        '{{WRAPPER}} .uafe-timeline-wrapper .direction-r .desc' => 'margin-top: {{SIZE}}{{UNIT}}',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'desc_box_shadow',
                    'selector' => '{{WRAPPER}} .uafe-timeline-wrapper .timeline .desc',
                ]
            );

            $this->add_responsive_control(
                'desc_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                    'default' => [
                        'top' => 0,
                        'right' => 0,
                        'bottom' => 0,
                        'left' => 0,
                        'unit' => 'px',
                        'isLinked' => true,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .uafe-timeline-wrapper .timeline .desc' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_section();

            // Style Tab End

        }

        protected function render() {
            $data = $this->get_settings_for_display();

            $color1 = $data['line_color_one'];
            $location1 = $data['location_a']['size'];
            $color2 = $data['line_color_two'];
            $location2 = $data['location_b']['size'];

            $id = $this->get_id();

            ?>
            <div class="uafe-timeline-wrapper">

                <style>
                    .uafe-timeline-wrapper ul:before{
                        background: linear-gradient(to bottom, rgba(213, 213, 213, 0) 0%, <?php echo $color1; ?> <?php echo $location1; ?>%, <?php echo $color2; ?> <?php echo $location2; ?>%, rgba(213, 213, 213, 0) 100%) !important;
                    }
                </style>

                <?php if( $data['list'] ): ?>
                    <ul class="timeline">
                    <?php foreach( $data['list'] as $key => $list):  ?>

                    <li>
                        <div class="direction-<?php echo ($key & 1 ? 'l' : 'r'); ?>">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag"><?php echo $list['title']; ?></span>
                            <span class="time-wrapper"><span class="time"><?php echo $list['date']; ?></span></span>
                        </div>
                        <div class="desc"><?php echo $list['text']; ?></div>
                        </div>
                    </li>

                    <?php endforeach;  ?>
                    </ul>
                <?php endif; ?>

            </div>
            <?php
        }
    }

?>


