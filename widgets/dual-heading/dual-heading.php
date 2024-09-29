<?php

    class UAFE_Dual_Heading extends \Elementor\Widget_Base {

        public function get_name() {
            return 'uafe-dual-heading';
        }

        public function get_title() {
            return esc_html__( 'Useful Addon Dual Heading', 'elementor-addon' );
        }

        public function get_icon() {
            return 'eicon-plug';
        }

        public function get_categories() {
            return [ 'uafe' ];
        }

        public function get_keywords() {
            return [ 'heading', 'dual', 'dual-heading', 'dual-color-heading' ];
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
                'heading_one',
                [
                    'label' => esc_html__( 'Title One', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Useful Addons', 'textdomain' ),
                    'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                    'dynamic' => [
                        'active' => true,
                    ],
                ]
            );

            $this->add_control(
                'heading_two',
                [
                    'label' => esc_html__( 'Title Two', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Dual Heading', 'textdomain' ),
                    'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                    'dynamic' => [
                        'active' => true,
                    ],
                ]
            );

            $this->add_control(
                'tag_link',
                [
                    'label' => esc_html__( 'Link', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'options' => [ 'url', 'is_external', 'nofollow' ],
                    'default' => [
                        'url' => '',
                        'is_external' => false,
                        'nofollow' => false,
                    ],
                    'label_block' => true,
                    'dynamic' => [
                        'active' => true,
                    ],
                ]
            );

            $this->add_control(
                'heading_tag',
                [
                    'label' => esc_html__( 'HTML Tag', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'h2',
                    'options' => [
                        'h1' => esc_html__( 'H1', 'textdomain' ),
                        'h2' => esc_html__( 'H2', 'textdomain' ),
                        'h3'  => esc_html__( 'H3', 'textdomain' ),
                        'h4' => esc_html__( 'H4', 'textdomain' ),
                        'h5' => esc_html__( 'H5', 'textdomain' ),
                        'h6' => esc_html__( 'H6', 'textdomain' ),
                        'p' => esc_html__( 'P', 'textdomain' ),
                    ],
                ]
            );


            $this->end_controls_section();


            // Style Tab Start

            $this->start_controls_section(
                'section_style',
                [
                    'label' => esc_html__( 'Style', 'elementor-addon' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->start_controls_tabs(
                'style_tabs'
            );
            
            $this->start_controls_tab(
                'style_heading_one',
                [
                    'label' => esc_html__( 'Heading One', 'uafe' ),
                ]
            );

            $this->add_control(
                'heading_one_color',
                [
                    'label' => esc_html__( 'Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#000',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-dual-heading-wrapper .head-one' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'heading_one_typography',
                    'selector' => '{{WRAPPER}} .uafe-dual-heading-wrapper .head-one',
                ]
            );
            
            $this->add_group_control(
                \Elementor\Group_Control_Text_Stroke::get_type(),
                [
                    'name' => 'heading_one_stroke',
                    'selector' => '{{WRAPPER}} .uafe-dual-heading-wrapper .head-one',
                ]
            );

            $this->end_controls_tab();

            $this->start_controls_tab(
                'style_heading_two',
                [
                    'label' => esc_html__( 'Heading Two', 'textdomain' ),
                ]
            );

            $this->add_control(
                'heading_two_color',
                [
                    'label' => esc_html__( 'Color', 'uafe' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#168aff',
                    'selectors' => [
                        '{{WRAPPER}} .uafe-dual-heading-wrapper .head-two' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'heading_two_typography',
                    'selector' => '{{WRAPPER}} .uafe-dual-heading-wrapper .head-two',
                ]
            );
            
            $this->add_group_control(
                \Elementor\Group_Control_Text_Stroke::get_type(),
                [
                    'name' => 'heading_two_stroke',
                    'selector' => '{{WRAPPER}} .uafe-dual-heading-wrapper .head-two',
                ]
            );
            
            $this->end_controls_tab();
            $this->end_controls_tabs();
            $this->end_controls_section();

            // Style Tab End

        }

        protected function render() {
            $data = $this->get_settings_for_display();

            if ( ! empty( $data['tag_link']['url'] ) ) {
                $this->add_link_attributes( 'tag_link', $data['tag_link'] );
            }

            $id = $this->get_id();

            ?>
            <div class="uafe-dual-heading-wrapper">

                <a <?php $this->print_render_attribute_string( 'tag_link' ); ?> >
                    <<?php echo $data['heading_tag']; ?>> 
                        <span class="head-one"> <?php echo $data['heading_one']; ?> </span> 
                        <span class="head-two"> <?php echo $data['heading_two']; ?> </span>
                    </<?php echo $data['heading_tag']; ?>>
                </a>

            </div>

            <?php
        }
    }

?>

