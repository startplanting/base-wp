<?php

// =============================================================================
// FRAMEWORK/FUNCTIONS/PRO/I18N/APP.PHP
// -----------------------------------------------------------------------------
// Localization strings.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Messaging
//   02. General Purpose
//   03. Status
//   04. Accessibility
//   05. Formatting
//   06. Breakpoints
//   07. Titles
//   08. Content
//   09. Inspector
//   10. Elements
//   11. Forms
//   12. Controls
//   13. Notifications
//   14. Assignments
//   15. Presets
//   16. Confirm
//   17. Options
//   18. Manage
//   19. Templates
//   20. Design Cloud
//   21. Fonts
//   22. Colors
//   23. Responsive Text
//   24. Font Weights
//   25. Custom Code
//   26. Choices
//   27. Sort
//   28. Actions
//   29. Errors
//   30. Preferences
//   31. Skeleton Mode
//   32. Dynamic Content
//   33. Global Blocks
//   34. Launchpad
//   35. Regions
//   36. History
//   37. Pro
// =============================================================================

return array(

  'integration-mode'                              => 'pro',
  'powered-by-themeco'                            => __( 'Powered by Themeco', '__x__' ),


  // Messaging
  // ---------

  'welcome-app'                                   => __( '<strong>Howdy!</strong> What would you like to launch?', '__x__' ),
  'save'                                          => __( 'Save', '__x__' ),
  'apply'                                         => __( 'Apply', '__x__' ),
  'loading'                                       => __( 'Loading&hellip;', '__x__' ),
  'unauthorized'                                  => __( 'You don&apos;t have permission to do that.', '__x__' ),
  'exit-to-dashboard'                             => __( 'Exit to Dashboard', '__x__' ),
  'unsaved-warning'                               => __( 'You have unsaved changes that will be lost if you continue. Are you sure you wish to leave?', '__x__' ),
  'unauthorized'                                  => __( '<strong>Oops!</strong> Looks like you are trying to view something you are not allowed to access. Check your permissions in the plugin settings.', '__x__' ),

  'translate'                                     => __( 'Translate', '__x__' ),
  'translation.entity'                            => __( 'Translation', '__x__' ),
  'translation.blank'                             => __( 'This {{context}} has not been translated into the active language.', '__x__' ),
  'translation.start-blank'                       => __( 'Start Blank', '__x__' ),
  'translation.or'                                => __( 'or', '__x__' ),
  'translation.copy-existing'                     => __( 'Copy Existing', '__x__' ),
  'translation.create-message'                    => __( 'This <strong>{{context}}</strong> does not have a <strong>{{lang}}</strong> translation. Start with a blank slate or choose an existing translation to begin with.', '__x__' ),

  'streamline-nav-unsaved'                        => __( 'Would you like to edit this {{context}}? You have unsaved changes that will be lost if you continue.', '__x__' ),
  'streamline-nav'                                => __( 'Would you like to edit this {{context}}? You can safely leave as there are no unsaved changes.', '__x__' ),


  // General Purpose
  // ---------------

  'global'                                        => __( 'Global', '__x__' ),
  'copy'                                          => __( 'Copy', '__x__' ),
  'copy-thing'                                    => __( 'Copy {{context', '__x__' ),
  'copy-of'                                       => __( 'Copy of {{title}}', '__x__' ),
  'copy-of-numeric'                               => __( '{{title}} ({{index}})', '__x__' ),
  'indexed'                                       => __( '{{label}} {{index}}', '__x__'),
  'search'                                        => __( 'Search', '__x__' ),
  'search-thing'                                  => __( 'Search {{context}}', '__x__' ),
  'go-validate'                                   => __( 'Go Validate', '__x__' ),
  'title'                                         => __( 'Title', '__x__' ),
  'thing-title'                                   => __( '{{context}} Title', '__x__' ),
  'back'                                          => __( 'Back', '__x__' ),
  'back-to'                                       => __( 'Back to {{to}}', '__x__' ),
  'item'                                          => __( 'Item', '__x__'),
  'add-item'                                      => __( 'Add Item', '__x__' ),
  'add'                                           => __( 'Add', '__x__' ),
  'add-new'                                       => __( 'Add New', '__x__' ),
  'add-thing'                                     => __( 'Add {{context}}', '__x__' ),
  'edit'                                          => __( 'Edit', '__x__' ),
  'edit-thing'                                    => __( 'Edit {{context}}', '__x__' ),
  'unassigned'                                    => __( 'Unassigned', '__x__' ),
  'select'                                        => __( 'Select', '__x__' ),
  'select-thing'                                  => __( 'Select {{context}}', '__x__' ),
  'choose'                                        => __( '– Choose –', '__x__' ),
  'custom'                                        => __( 'Custom', '__x__' ),
  'save'                                          => __( 'Save', '__x__' ),
  'save-thing'                                    => __( 'Save {{context}}', '__x__' ),
  'remove'                                        => __( 'Remove', '__x__' ),
  'create'                                        => __( 'Create', '__x__' ),
  'create-thing'                                  => __( 'Create {{context}}', '__x__' ),
  'insert'                                        => __( 'Insert', '__x__' ),
  'insert-thing'                                  => __( 'Insert {{context}}', '__x__' ),
  'default'                                       => __( 'Default', '__x__' ),
  'default-thing'                                 => __( 'Default {{context}}', '__x__' ),
  'name'                                          => __( 'Name', '__x__' ),
  'thing-name'                                    => __( '{{context}} Name', '__x__' ),
  'name-thing'                                    => __( 'Name {{context}}', '__x__' ),
  'no-things'                                     => __( 'No {{context}}', '__x__' ),
  'no-things-found'                               => __( 'No {{context}} Found', '__x__' ),
  'refine-search'                                 => __( 'Try refining your search to locate your desired {{context}}.', '__x__' ),
  'settings-format'                               => __( '{{type}} Settings', '__x__' ),
  'context-css'                                   => __( '{{context}} CSS', '__x__' ),
  'context-js'                                    => __( '{{context}} JS', '__x__' ),
  'post-type'                                     => __( 'Post Type', '__x__' ),

  'created'                                       => __( '{{context}} Created', '__x__' ),
  'added'                                         => __( '{{context}} Added', '__x__' ),
  'moved'                                         => __( '{{context}} Moved', '__x__' ),
  'duplicated'                                    => __( '{{context}} Duplicated', '__x__' ),
  'deleted'                                       => __( '{{context}} Deleted', '__x__' ),
  'updated'                                       => __( '{{context}} Updated', '__x__' ),


  // Status
  // ------

  'status'                                        => __( 'Status', '__x__' ),
  'status.draft'                                  => __( 'Draft', '__x__' ),
  'status.publish'                                => __( 'Publish', '__x__' ),
  'status.private'                                => __( 'Private', '__x__' ),


  // Accessibility
  // -------------

  'a11y.resize'                                   => __( 'Resize', '__x__' ),
  'a11y.close'                                    => __( 'Close', '__x__' ),
  'a11y.expand'                                   => __( 'Expand', '__x__' ),
  'a11y.collapse'                                 => __( 'Collapse', '__x__' ),


  // Formatting
  // ----------

  'formatting-colon'                              => __( '{{prefix}}: {{content}}', '__x__'),


  // Breakpoints
  // -----------

  'breakpoints.size.xl'                           => __( 'Extra Large', '__x__' ),
  'breakpoints.size.lg'                           => __( 'Large', '__x__' ),
  'breakpoints.size.md'                           => __( 'Medium', '__x__' ),
  'breakpoints.size.sm'                           => __( 'Small', '__x__' ),
  'breakpoints.size.xs'                           => __( 'Extra Small', '__x__' ),
  'breakpoints.size-abbr.xl'                      => __( 'XL', '__x__' ),
  'breakpoints.size-abbr.lg'                      => __( 'LG', '__x__' ),
  'breakpoints.size-abbr.md'                      => __( 'MD', '__x__' ),
  'breakpoints.size-abbr.sm'                      => __( 'SM', '__x__' ),
  'breakpoints.size-abbr.xs'                      => __( 'XS', '__x__' ),
  'breakpoints.desc.xl'                           => __( '1200px &amp; Up', '__x__' ),
  'breakpoints.desc.lg'                           => __( '980px-1199px', '__x__' ),
  'breakpoints.desc.md'                           => __( '768px-979px', '__x__' ),
  'breakpoints.desc.sm'                           => __( '481px-767px', '__x__' ),
  'breakpoints.desc.xs'                           => __( '480px &amp; Smaller', '__x__' ),


  // Titles
  // ------

  'home.title'                                    => __( 'Home', '__x__' ),
  'options.title'                                 => __( 'Theme Options', '__x__' ),
  'managers.title'                                => __( 'Managers', '__x__' ),
  'layout.title'                                  => __( 'Layout', '__x__' ),
  'inspector.title'                               => __( 'Inspector', '__x__' ),
  'elements.title'                                => __( 'Elements', '__x__' ),
  'settings.title'                                => __( 'Settings', '__x__' ),
  'cheatsheet.title'                              => __( 'Cheatsheet', '__x__' ),


  // Content
  // -------

  'content.sections'                              => __( 'Sections', '__x__' ),
  'content.rows'                                  => __( 'Rows', '__x__' ),
  'content.columns'                               => __( 'Columns', '__x__' ),
  'content.first-row'                             => __( 'Add your first Row to this Section.', '__x__' ),
  'content.notify-before-save-template'           => __( 'Add some Sections before saving a Template', '__x__' ),
  'content.remove-spacing'                        => __( 'Remove Spacing', '__x__' ),
  'content.remove-spacing-confirm'                => __( 'Would you like to remove all margin and padding from this section, its rows and its columns?', '__x__' ),


  // Inspector
  // ---------

  'inspector.na-title'                            => __( 'Nothing Selected', '__x__' ),
  'inspector.na-message'                          => __( 'Click an element in the site preview, or use the magnifying glass icon on elements in the <strong>Layout</strong> pane.', '__x__' ),
  'inspector.search'                              => __( 'Search Inspector...', '__x__' ),
  'inspector.apply-preset-warning'                => __( 'This action will replace all element styling. Proceed?', '__x__' ),

  'inspector.undefined-title'                     => __( 'Undefined Element', '__x__' ),
  'inspector.undefined-message'                   => __( 'The definition for this element could not be located. You may need to activate a plugin. The type declared for this element is: <strong>{{type}}</strong>', '__x__' ),

  'inspector.classic-element-title'               => __( 'Classic Element', '__x__' ),
  'inspector.classic-element-message'             => __( 'This is a classic element. These are supported, but have less controls to configure.', '__x__' ),

  'inspector.group.content'                       => __( 'Content', '__x__' ),
  'inspector.group.design'                        => __( 'Design', '__x__' ),
  'inspector.group.customize'                     => __( 'Customize', '__x__' ),


  // Elements
  // --------

  'elements.entity'                               => __( 'Element', '__x__' ),
  'elements.entities'                             => __( 'Elements', '__x__' ),
  'elements.classic-title'                        => __( 'Classic Elements', '__x__' ),
  'elements.classic-description'                  => __( 'Does not include advanced controls.', '__x__' ),

  'elements-confirm-delete'                       => __( 'Are you sure you want to delete this {{title}}?', '__x__' ),
  'elements-confirm-erase'                        => __( 'Are you sure you want to delete this element\'s contents?', '__x__' ),
  'elements-preview-template-error'               => __( 'This element could not render due to invalid markup. You may have unclosed HTML tags in your content.', '__x__' ),
  'elements-undefined-preview'                    => __( 'This element could not render because its definition is missing. You might need to activate a plugin.', '__x__' ),
  'elements-preview-unavailable'                  => __( 'No Preview Available (<a target="_blank" href="{{url}}">View Live</a>)', '__x__' ),


  // Forms
  // -----

  'forms.icon-picker.blank'                       => __( 'No icons found.', '__x__' ),
  'forms.icon-picker.search-context'              => __( 'Icons', '__x__' ),
  'forms.label-input.placeholder'                 => __( 'Double click to edit.', '__x__'),

  'forms.toggle.on'                               => __( 'On', '__x__'),
  'forms.toggle.off'                              => __( 'Off', '__x__'),

  'forms.flex.standard'                           => __( 'Standard', '__x__' ),
  'forms.flex.no-shrink'                          => __( 'No Shrink', '__x__' ),
  'forms.flex.fill-space'                         => __( 'Fill Space', '__x__' ),
  'forms.flex.fill-space-equally'                 => __( 'Fill Space Equally', '__x__' ),
  'forms.flex.flex-grow'                          => __( 'Flex<br>Grow', '__x__' ),
  'forms.flex.flex-shrink'                        => __( 'Flex<br>Shrink', '__x__' ),
  'forms.flex.flex-basis'                         => __( 'Flex<br>Basis', '__x__' ),
  'forms.flex.start'                              => __( 'Start', '__x__' ),
  'forms.flex.flex-start'                         => __( 'Start', '__x__' ),
  'forms.flex.center'                             => __( 'Center', '__x__' ),
  'forms.flex.end'                                => __( 'End', '__x__' ),
  'forms.flex.flex-end'                           => __( 'End', '__x__' ),
  'forms.flex.space-around'                       => __( 'S-Around', '__x__' ),
  'forms.flex.space-between'                      => __( 'S-Between', '__x__' ),
  'forms.flex.space-evenly'                       => __( 'S-Evenly', '__x__' ),
  'forms.flex.stretch'                            => __( 'Stretch', '__x__' ),
  'forms.flex.auto'                               => __( 'Auto', '__x__' ),
  'forms.flex.baseline'                           => __( 'Baseline', '__x__' ),

  'border.none'                                   => __( 'None', '__x__' ),
  'border.solid'                                  => __( 'Solid', '__x__' ),
  'border.dotted'                                 => __( 'Dotted', '__x__' ),
  'border.dashed'                                 => __( 'Dashed', '__x__' ),
  'border.double'                                 => __( 'Double', '__x__' ),
  'border.groove'                                 => __( 'Groove', '__x__' ),
  'border.ridge'                                  => __( 'Ridge', '__x__' ),
  'border.inset'                                  => __( 'Inset', '__x__' ),
  'border.outset'                                 => __( 'Outset', '__x__' ),


  // Controls
  // --------

  'controls.setup'                                => __( 'Setup', '__x__' ),
  'controls.id'                                   => __( 'ID', '__x__' ),
  'controls.class'                                => __( 'Class', '__x__' ),
  'controls.style'                                => __( 'Style', '__x__' ),
  'controls.inline-css'                           => __( 'Inline CSS', '__x__' ),
  'controls.edit-css'                             => __( 'Edit CSS', '__x__' ),
  'controls.element-css'                          => __( 'Element CSS', '__x__' ),
  'controls.element-css-placeholder'              => __( '/*\n\nUse "$el" in this editor to\ntarget this element (it will\nbecome the generated class).\n\ne.g.\n\n$el    { property: value; }\n↓\n.el123 { property: value; }\n\n*/', '__x__' ),
  'controls.toggle-hash'                          => __( 'Toggle Hash', '__x__' ),
  'controls.hide-bp'                              => __( 'Hide During<br>Breakpoints', '__x__' ),
  'controls.base'                                 => __( 'Base', '__x__' ),
  'controls.hover'                                => __( 'Hover', '__x__' ),

  'controls.font-family.select'                   => __( '{{family}} ({{source}})', '__x__' ),
  'controls.text-editor.click-to-edit'            => __( 'Click to Edit', '__x__' ),
  'controls.text-editor.edit-text'                => __( 'Edit Text', '__x__' ),
  'controls.text-editor.mode-html'                => __( 'HTML', '__x__' ),
  'controls.text-editor.mode-rich-text'           => __( 'Rich Text', '__x__' ),
  'controls.classic.title'                        => __('Title', '__x__'),

  'controls.unlinked'                             => __( 'Unlinked', '__x__' ),
  'controls.linked'                               => __( 'Linked', '__x__' ),
  'controls.link-sides'                           => __( 'Link Sides', '__x__' ),
  'controls.side'                                 => __( 'Side', '__x__' ),
  'controls.style'                                => __( 'Style', '__x__' ),
  'controls.width'                                => __( 'Width', '__x__' ),
  'controls.color'                                => __( 'Color', '__x__' ),
  'controls.blur'                                 => __( 'Blur', '__x__' ),
  'controls.x-offset'                             => __( 'X Offset', '__x__' ),
  'controls.y-offset'                             => __( 'Y Offset', '__x__' ),
  'controls.spread-position'                      => __( 'Spread &amp;<br>Position', '__x__' ),

  'controls.box.top'                              => __( 'Top', '__x__' ),
  'controls.box.right'                            => __( 'Right', '__x__' ),
  'controls.box.bottom'                           => __( 'Bottom', '__x__' ),
  'controls.box.bttm'                             => _x( 'Bttm', 'Short version of bottom for dimension control', '__x__' ),
  'controls.box.left'                             => __( 'Left', '__x__' ),

  'controls.box.top-left'                         => __( 'Top<br>Left', '__x__' ),
  'controls.box.top-right'                        => __( 'Top<br>Right', '__x__' ),
  'controls.box.bttm-right'                       => __( 'Bttm<br>Right', '__x__' ),
  'controls.box.bttm-left'                        => __( 'Bttm<br>Left', '__x__' ),

  'controls.font-style'                           => __( 'Font Style', '__x__' ),
  'controls.font-style.normal'                    => __( 'Normal', '__x__' ),
  'controls.font-style.italic'                    => __( 'Italic', '__x__' ),

  'controls.info.type'                            => __( 'Type', '__x__' ),
  'controls.info.normal'                          => __( 'Normal', '__x__' ),
  'controls.info.popover'                         => __( 'Popover', '__x__' ),
  'controls.info.placement'                       => __( 'Placement', '__x__' ),
  'controls.info.trigger'                         => __( 'Trigger', '__x__' ),
  'controls.info.hover'                           => __( 'Hover', '__x__' ),
  'controls.info.focus'                           => __( 'Focus', '__x__' ),
  'controls.info.click'                           => __( 'Click', '__x__' ),
  'controls.info.title'                           => __( 'Title', '__x__' ),
  'controls.info.content'                         => __( 'Content', '__x__' ),

  'controls.media.audio-url'                      => __( 'Audio URL', '__x__' ),
  'controls.media.preload-content'                => __( 'Preload<br>Content', '__x__' ),
  'controls.media.none'                           => __( 'None', '__x__' ),
  'controls.media.auto'                           => __( 'Auto', '__x__' ),
  'controls.media.metadata'                       => __( 'Metadata', '__x__' ),
  'controls.media.advanced'                       => __( 'Advanced', '__x__' ),
  'controls.media.loop'                           => __( 'Loop', '__x__' ),
  'controls.media.autoplay'                       => __( 'Autoplay', '__x__' ),
  'controls.media.display-function'               => __( 'Display &<br>Function', '__x__' ),

  'controls.sidebar.select'                       => __( 'Select Widget Area', '__x__' ),

  'controls.text-align.label'                     => __( 'Text Align', '__x__' ),
  'controls.text-align.left'                      => __( 'Left', '__x__' ),
  'controls.text-align.center'                    => __( 'Center', '__x__' ),
  'controls.text-align.right'                     => __( 'Right', '__x__' ),
  'controls.text-align.justify'                   => __( 'Justify', '__x__' ),
  'controls.text.html-tag'                        => __( 'HTML Tag', '__x__' ),
  'controls.text.looks-like'                      => __( 'Looks Like', '__x__' ),
  'controls.text.label'                           => __( 'Text', '__x__' ),
  'controls.text.color'                           => __( 'Text<br>Color', '__x__' ),

  'controls.text-decoration.label'                => __( 'Text Decoration', '__x__' ),
  'controls.text-decoration.underline'            => __( 'Underline', '__x__' ),
  'controls.text-decoration.line-through'         => __( 'Line Through', '__x__' ),

  'controls.text-format.font-family'              => __( 'Font Family', '__x__' ),
  'controls.text-format.font-weight'              => __( 'Font Weight', '__x__' ),
  'controls.text-format.font-size'                => __( 'Font Size', '__x__' ),
  'controls.text-format.letter-spacing'           => __( 'Letter Spacing', '__x__' ),
  'controls.text-format.line-height'              => __( 'Line Height', '__x__' ),

  'controls.text-transform.label'                 => __( 'Text Transform', '__x__' ),
  'controls.text-transform.uppercase'             => __( 'Uppercase', '__x__' ),
  'controls.text-transform.capitalize'            => __( 'Capitalize', '__x__' ),
  'controls.text-transform.lowercase'             => __( 'Lowercase', '__x__' ),

  'controls.image.retina'                         => __( 'Retina & Dimensions', '__x__' ),
  'controls.image.dim-preview'                    => __( 'Dimensions Preview', '__x__' ),
  'controls.image.alt-text'                       => __( 'Describe Your Image', '__x__' ),
  'controls.image.source'                         => __( 'Source', '__x__' ),
  'controls.image.alt-text'                       => __( 'Alt Text', '__x__' ),
  'controls.image.link'                           => __( 'Link', '__x__' ),
  'controls.image.info'                           => __( 'Info', '__x__' ),
  'controls.image.w'                              => __( 'W', '__x__' ),
  'controls.image.h'                              => __( 'H', '__x__' ),

  'controls.flex.children'                        => __( 'Child Placement', '__x__' ),
  'controls.flex.row'                             => __( 'Row', '__x__' ),
  'controls.flex.column'                          => __( 'Column', '__x__' ),
  'controls.flex.self'                            => __( 'Self Flex', '__x__' ),
  'controls.flex.reverse'                         => __( 'Reverse', '__x__' ),
  'controls.flex.wrap'                            => __( 'Wrap', '__x__' ),
  'controls.flex.align-h'                         => __( 'Align Horizontal', '__x__' ),
  'controls.flex.align-v'                         => __( 'Align Vertical', '__x__' ),

  'controls.link.preview'                         => __( 'Preview', '__x__' ),
  'controls.link.type'                            => __( 'Type', '__x__' ),
  'controls.link.content'                         => __( 'Content', '__x__' ),
  'controls.link.url'                             => __( 'URL', '__x__' ),
  'controls.link.url-placeholder'                 => __( 'e.g. http://theme.co/', '__x__' ),
  'controls.link.new-tab'                         => __( 'New Tab', '__x__' ),
  'controls.link.email'                           => __( 'Email', '__x__' ),
  'controls.link.email-placeholder'               => __( 'e.g. hello@example.com', '__x__' ),
  'controls.link.email-subject'                   => __( 'Subject', '__x__' ),
  'controls.link.email-subject-placeholder'       => __( 'e.g. Howdy!', '__x__' ),
  'controls.link.phone'                           => __( 'Phone', '__x__' ),
  'controls.link.phone-placeholder'               => __( 'e.g. 18885551234', '__x__' ),

  'controls.share'                                => __( 'Share', '__x__' ),
  'controls.share.title'                          => __( 'Title', '__x__' ),
  'controls.share.link'                           => __( 'Link', '__x__' ),
  'controls.share.type'                           => __( 'Type', '__x__' ),


  // Notifications
  // -------------

  'notification-notice'                           => __( 'Hey!', '__x__' ),
  'notification-success'                          => __( 'Awesome!', '__x__' ),
  'notification-error'                            => __( 'Uh oh!', '__x__' ),

  'notification-refreshing-preview'               => __( 'Refreshing preview.', '__x__' ),
  'notification-refreshing-preview-save-reminder' => __( 'Refreshing preview. Don\'t forget to save.', '__x__' ),

  'notify.saved'                                  => __( 'Saved {{context}}!', '__x__' ),
  'notify.failed-to-save'                         => __( 'Failed to save {{context}}.', '__x__' ),
  'notify.delete-confirm'                         => __( 'Are you sure you want to delete this {{context}}?', '__x__' ),
  'notify.delete-confirm-perm'                    => __( 'Are you sure you want to delete this {{context}}? This can not be undone.', '__x__' ),
  'notify.duplicated'                             => __( 'Duplicated {{context}}.', '__x__' ),
  'notify.failed-to-duplicate'                    => __( 'Failed to duplicate {{context}}.', '__x__' ),
  'notify.deleted'                                => __( 'Deleted {{context}}.', '__x__' ),
  'notify.failed-to-delete'                       => __( 'Failed to delete {{context}}.', '__x__' ),
  'notify.title-updated'                          => __( '{{context}} title updated.', '__x__' ),
  'notify.failed-to-update-title'                 => __( 'Failed to update {{context}} title.', '__x__' ),
  'notify.created'                                => __( '{{context}} created!', '__x__' ),
  'notify.failed-to-create'                       => __( 'Failed to create {{context}}.', '__x__' ),
  'notify.updated'                                => __( 'Updated {{context}}!', '__x__' ),
  'notify.failed-to-update'                       => __( 'Failed to update {{context}}.', '__x__' ),
  'notify.loading'                                => __( 'Loading {{context}}.', '__x__' ),
  'notify.inserted'                               => __( '{{context}} inserted!', '__x__' ),
  'notify.failed-to-insert'                       => __( 'Failed to insert {{context}}.', '__x__' ),
  'notify.installing'                             => __( 'Installing {{context}}.', '__x__' ),
  'notify.installed'                              => __( '{{context}} installed!', '__x__' ),
  'notify.failed-to-install'                      => __( 'Failed to install {{context}}.', '__x__' ),
  'notify.title-required'                         => __( 'Your {{context}} needs a title.', '__x__' ),
  'notify.name-required'                          => __( 'Your {{context}} needs a name.', '__x__' ),
  'notify.name-overwrite-confirm'                 => __( 'An existing {{context}} already has that name. Would you like to overwrite it?', '__x__' ),
  'notify.preview-updating'                       => __( 'Preview Updating.', '__x__' ),
  'notify.elements-max-children'                  => __( 'This element already has the maximum number of children.', '__x__' ),
  'notify.elements-min-children'                  => __( 'This element requires a minimum number of children.', '__x__' ),
  'notify.tinymce-failed'                         => __( 'Rich Text Editing is disabled because we found a problem with your Wordpress Visual Editor. You can still edit the text in HTML mode.', '__x__' ),


  // Assignments
  // -----------

  'assign.entities'                               => __( 'Assignments', '__x__' ),
  'assign.global'                                 => __( 'Global', '__x__' ),
  'assign.unassigned'                             => __( 'Unassigned', '__x__' ),
  'assign.tagged'                                 => __( '{{tag}}: {{title}}', '__x__' ),
  'assign.multiple'                               => __( 'Multiple Assignments', '__x__' ),
  'assign.make-global'                            => __( 'Make Global', '__x__' ),
  'assign.manage'                                 => __( 'Manage assignments.', '__x__' ),
  'assign.global-message'                         => __( 'This {{context}} is currently assigned as your global (default) {{context}}.', '__x__' ),
  'assign.collision'                              => __( 'This context is already assigned to another {{context}}. Would you like to move that assignment here instead?', '__x__' ),
  'assign.collision-global'                       => __( 'You already have a global {{context}} assigned. Would you like to use this {{context}} instead?', '__x__' ),
  'assign.collision-global-yep'                   => __( 'Yes, make this my global {{context}}', '__x__' ),
  'assign.collision-global-nope'                  => __( 'No, keep my current {{context}}', '__x__' ),

  'create-index.start-blank'                      => __( 'Start Blank', '__x__' ),
  'create-index.use-template'                     => __( 'Use Template', '__x__' ),
  'create-index.manage-blank'                     => __( 'Start blank or use template to get started.', '__x__'),


  // Presets
  // -------

  'presets.placeholder'                           => __( 'Nothing Selected', '__x__' ),
  'presets.na'                                    => __( 'No Presets', '__x__' ),
  'presets.save'                                  => __( 'Save Preset', '__x__' ),
  'presets.apply'                                 => __( 'Apply Preset', '__x__' ),
  'presets.replace-content'                       => __( 'Replace Content', '__x__' ),
  'presets.apply-confirm'                         => __( 'Yes, Apply', '__x__' ),
  'presets.apply-decline'                         => __( 'No thanks', '__x__' ),


  // Confirm
  // -------

  'confirm-yep'                                   => __( 'Yes, Proceed', '__x__' ),
  'confirm-no-thanks'                             => __( 'No Thanks', '__x__' ),
  'confirm-nope'                                  => __( 'No, Go Back', '__x__' ),


  // Options
  // -------

  'options.entities'                              => __( 'Options', '__x__' ),
  'options.info'                                  => __( 'Info:', '__x__' ),

  'options.headers.launch-builder'                => __( 'Launch Header Builder', '__x__' ),
  'options.headers.is-original'                   => __( 'You are currently using <strong>Original&nbsp;Headers</strong>', '__x__' ),
  'options.headers.assign'                        => __( 'Assign a Global Header in the builder to use <strong>Pro&nbsp;Headers</strong>', '__x__' ),
  'options.headers.is-pro'                        => __( 'You are currently using <strong>Pro&nbsp;Headers</strong>', '__x__' ),
  'options.headers.switch-back'                   => __( 'Switch back to <strong>Original&nbsp;Headers</strong>', '__x__' ),
  'options.headers.confirm-switch-back'           => __( 'Are you sure you wish to switch back to Original Headers? This will unassign remove your global Pro Header.', '__x__' ),
  'options.headers.notify-switch-back'            => __( 'Header Assignment removed!', '__x__' ),

  'options.footers.launch-builder'                => __( 'Launch Footer Builder', '__x__' ),
  'options.footers.is-original'                   => __( 'You are currently using <strong>Original&nbsp;Footers</strong>', '__x__' ),
  'options.footers.assign'                        => __( 'Assign a Global Footer in the builder to use <strong>Pro&nbsp;Footers</strong>', '__x__' ),
  'options.footers.is-pro'                        => __( 'You are currently using <strong>Pro&nbsp;Footers</strong>', '__x__' ),
  'options.footers.switch-back'                   => __( 'Switch back to <strong>Original&nbsp;Footers</strong>', '__x__' ),
  'options.footers.confirm-switch-back'           => __( 'Are you sure you wish to switch back to Original Footers? This will unassign remove your global Pro Footer.', '__x__' ),
  'options.footers.notify-switch-back'            => __( 'Footer Assignment removed!', '__x__' ),


  // Manage
  // ------

  'manage.welcome'                                => __( 'Manage all of your templates, fonts, and colors from one central location!', '__x__' ),


  // Templates
  // ---------

  'templates.manager'                             => __( 'Template Manager', '__x__' ),
  'templates.entity'                              => __( 'Template', '__x__'),
  'templates.entities'                            => __( 'Templates', '__x__'),
  'templates.preset.entity'                       => __( 'Preset', '__x__'),
  'templates.preset.entities'                     => __( 'Presets', '__x__'),
  'templates.save-as'                             => __( 'Save as Template', '__x__'),
  'templates.load'                                => __( 'Load Template', '__x__' ),
  'templates.save'                                => __( ' Save Template', '__x__' ),

  'templates.no-templates'                        => __( 'No Templates', '__x__'),
  'templates.no-thing-templates'                  => __( 'No {{context}} Templates', '__x__'),
  'templates.visit-manager'                       => __( 'Visit Template Manager', '__x__'),
  'templates.blank-welcome'                       => __( 'Begin with a blank slate.', '__x__'),

  'templates.download-label.one'                  => __( 'Download Template', '__x__'),
  'templates.download-label.n'                    => __( 'Download {{count}} Templates', '__x__'),
  'templates.delete-label.one'                    => __( 'Delete Template', '__x__'),
  'templates.delete-label.n'                      => __( 'Delete {{count}} Templates', '__x__'),
  'templates.delete-popover.one'                  => __( 'Are you sure you want to delete the selected template?', '__x__'),
  'templates.delete-popover.n'                    => __( 'Are you sure you want to delete the {{count}} selected templates?', '__x__'),

  'templates.filter-all'                          => __( 'All', '__x__'),
  'templates.filter-site'                         => __( 'Sites', '__x__'),
  'templates.filter-header'                       => __( 'Headers', '__x__'),
  'templates.filter-footer'                       => __( 'Footers', '__x__'),
  'templates.filter-content'                      => __( 'Content', '__x__'),
  'templates.filter-preset'                       => __( 'Presets', '__x__'),
  'templates.filter-my-templates'                 => __( 'My Templates', '__x__'),
  'templates.filter-themeco-templates'            => __( 'Themeco Templates', '__x__'),

  'templates.type-site'                           => __( 'Site', '__x__'),
  'templates.type-header'                         => __( 'Header', '__x__'),
  'templates.type-footer'                         => __( 'Footer', '__x__'),
  'templates.type-content'                        => __( 'Content', '__x__'),
  'templates.type-preset'                         => __( 'Preset', '__x__'),
  'templates.subtype-format'                      => __( '<strong>{{type}}</strong>: {{subtype}}', '__x__'),
  'templates.element-defaults.entity'             => __( 'Element Defaults', '__x__' ),
  'templates.element-defaults.message'            => __( 'When adding new Elements in the builders they will start with the Preset you assign.', '__x__' ),

  'templates.import.choose'                       => __( '<strong>Choose a Template</strong><br>or drag it here to import.', '__x__' ),
  'templates.import.imported'                     => __( '<strong>Here we go!</strong>Templates are importing.', '__x__' ),
  'templates.import.done'                         => __( '<strong>All done!</strong> Templates have been added.', '__x__' ),
  'templates.import.error'                        => __( '<strong>Uh oh!</strong> This file you chose was not valid and could not be imported.', '__x__' ),

  'templates.confirm-hide-starter'                => __( 'Are you sure you want to hide the starter pack? This will prevent you from importing them.', '__x__'),
  'templates.confirm-reimport'                    => __( 'It looks like you have imported this template package before. Would you like to import it again?', '__x__' ),
  'templates.upload-error'                        => __( 'Sorry! Your file is not properly formatted.', '__x__' ),

  'templates.unauthorized'                        => __( 'View your Templates to the right.', '__x__' ),
  'templates.notify.importing-starter'            => __( 'Importing Starter Pack. This could take a minute.', '__x__' ),
  'templates.notify.imported-starter'             => __( 'Imported Starter Pack!', '__x__' ),
  'templates.notify.upload-error'                 => __( 'Sorry! Your file is not properly formatted.', '__x__' ),
  'templates.notify.uploaded'                     => __( 'Template Uploaded!', '__x__' ),

  'templates.remove-preview-image'                => __( 'Remove Preview Image', '__x__'),


  // Design Cloud
  // ------------

  'design-cloud.title'                            => __( 'Design Cloud', '__x__' ),
  'design-cloud.validate.title'                   => __( 'Validation Required.', '__x__' ),
  'design-cloud.validate.confirm'                 => __( 'Your license must be validated before installing premium assets from Design Cloud.', '__x__' ),

  'design-cloud.how.title'                        => __( 'How It Works', '__x__' ),
  'design-cloud.how.one'                          => __( 'Our team of designers create<br>beautiful premium templates.', '__x__' ),
  'design-cloud.how.two'                          => __( 'They are added to Design Cloud<br>and show up automagically.', '__x__' ),
  'design-cloud.how.three'                        => __( 'Demo and install directly to<br>your Template Manager.', '__x__' ),

  'design-cloud.faq.title'                        => __( 'Frequently Asked Questions', '__x__' ),

  'design-cloud.install'                          => __( 'Install', '__x__' ),
  'design-cloud.installed'                        => __( 'Installed', '__x__' ),
  'design-cloud.installing'                       => __( 'Installing', '__x__' ),

  'design-cloud.see-it-live'                      => __( 'See it Live', '__x__' ),
  'design-cloud.demo-unavailable'                 => __( 'Demo Unavailable', '__x__' ),
  'design-cloud.by-author-url'                    => __( 'By <a href="{{url}}">{{author}}</a>', '__x__' ),
  'design-cloud.by-author'                        => __( 'By {{author}}', '__x__' ),

  'design-cloud.site-import.start'     => __( 'Let&apos;s get started!', '__x__' ),
  'design-cloud.site-import.complete'  => __( 'Have fun!', '__x__' ),
  'design-cloud.site-import.simulated' => __( 'Working on it...', '__x__' ),

  'design-cloud.site-import.timeout1'  => __( 'Working on it...', '__x__' ),
  'design-cloud.site-import.timeout2'  => __( 'Hang in there, trying to reconnect...', '__x__' ),
  'design-cloud.site-import.timeout3'  => __( 'Experiencing technical difficulties...', '__x__' ),
  'design-cloud.site-import.failure'   => __( 'We&apos;re sorry, the demo failed to finish importing.', '__x__' ),

  // Fonts
  // -----

  'fonts.entity'                                  => __( 'Font', '__x__' ),
  'fonts.entity-selection'                        => __( 'Font Selection', '__x__' ),
  'fonts.manager'                                 => __( 'Font Manager', '__x__' ),
  'fonts.description'                             => __( 'Once a new font has been added, click the arrow to the side of the label to reveal the selection tool for font families and weights. Double-click the label to rename the added font if desired. Make sure to save all changes before exiting.', '__x__' ),

  'fonts.duplicate-name-error'                    => __( 'Two fonts selections can not share the same name.', '__x__' ),
  'fonts.min-one-error'                           => __( 'You need at least one font. Create another before deleting this one.', '__x__' ),

  'fonts.select-family'                           => __( 'Select a Font Family', '__x__' ),
  'fonts.preview'                                 => __( 'Preview', '__x__' ),
  'fonts.preview-text'                            => __( 'Click here to type and preview your font selection...', '__x__' ),
  'fonts.upload'                                  => __( 'Upload Fonts', '__x__' ),
  'fonts.select-files'                            => __( 'Select Font File(s)', '__x__' ),

  'fonts.regular'                                 => __( 'Regular', '__x__' ),
  'fonts.italic'                                  => __( 'Italic', '__x__' ),
  'fonts.import-files'                            => __( 'Import Font Files', '__x__' ),
  'fonts.manager-add'                             => __( 'Add to Font Manager', '__x__' ),
  'fonts.item-name'                               => __( 'Font Item Name', '__x__' ),

  'fonts.google.subsets'                          => __( 'Enable Font Subsets', '__x__' ),
  'fonts.google.placeholder'                      => __( 'Additional Subsets', '__x__' ),

  'fonts.adobe.project-id'                        => __( 'Adobe Fonts Project ID', '__x__' ),
  'fonts.adobe.available'                         => __( 'Available Fonts', '__x__' ),
  'fonts.adobe.fonts'                             => __( 'Fonts', '__x__' ),
  'fonts.adobe.weights'                           => __( 'Weights', '__x__' ),
  'fonts.adobe.enter-id'                          => __( 'Enter your Adobe Fonts project ID above and click refresh.', '__x__' ),
  'fonts.adobe.not-found'                         => __( 'Your project was not found. Please check to make sure the project ID is correct and try again.', '__x__' ),
  'fonts.adobe.refreshing'                        => __( 'Refreshing&hellip;', '__x__' ),
  'fonts.adobe.refresh'                           => __( 'Refresh', '__x__' ),

  'fonts.group.custom'                            => __( 'Custom Fonts', '__x__' ),
  'fonts.group.adobe'                             => __( 'Adobe Fonts (Typekit)', '__x__' ),
  'fonts.group.system'                            => __( 'System Fonts', '__x__' ),
  'fonts.group.google'                            => __( 'Google Fonts', '__x__' ),

  'fonts.google.title'                            => __( 'Google Subsets', '__x__' ),
  'fonts.google.description'                      => __( 'Specify which character subsets you would like to enable below. All subsets included extended support. Latin is always loaded by default.', '__x__' ),
  'fonts.adobe.title'                             => __( 'Adobe Fonts (Typekit)', '__x__' ),
  'fonts.adobe.description'                       => __( 'To integrate your Adobe Fonts projects on this website, enter a project ID into the input below. You can find this by logging into Adobe Fonts, clicking on <strong>Web Projects</strong> and then looking for the <strong>Project ID</strong>.', '__x__' ),
  'fonts.custom.title'                            => __( 'Custom Fonts', '__x__' ),
  'fonts.custom.description'                      => __( 'Use this section to create custom font families. Upload custom font files to a family, then assign a weight and style. These families will become selectable in the Font Manager above. We recommend using the .woff or .woff2 file format.', '__x__' ),

  'fonts.body-copy'                               => __( 'Body Copy', '__x__' ),
  'fonts.headings'                                => __( 'Headings', '__x__' ),

  'fonts.display.title'                           => __( 'Font Display', '__x__' ),
  'fonts.display.description'                     => __( 'The <code>font-display</code> property gives users control over how the timeline for fonts being loaded into the browser should be executed. The value selected below will be utilized in supported browsers where applicable across your site. You can learn more about the nuances of each available option <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display" target="_blank" rel="nofollow">here</a>.', '__x__' ),
  'fonts.display.label'                           => __( 'Select Value', '__x__' ),


  // Colors
  // ------

  'colors.entity'                                 => __( 'Color', '__x__' ),
  'colors.title'                                  => __( 'Color Manager', '__x__' ),
  'colors.description'                            => __( 'Once a new color has been added, clicking it will reveal the color-picker in addition to an input where you can rename each color for clearer labeling. Duplicate and delete buttons are visible on hover. Make sure to save all changes before exiting.', '__x__' ),
  'colors.duplicate-name-error'                   => __( 'Two colors selections can not share the same name.', '__x__' ),

  'colors.brand-primary'                          => __( 'Brand Primary', '__x__' ),
  'colors.brand-secondary'                        => __( 'Brand Secondary', '__x__' ),
  'colors.link'                                   => __( 'Link', '__x__' ),
  'colors.link-interaction'                       => __( 'Link Interaction', '__x__' ),


  // Responsive Text
  // ---------------

  'responsive-text.selector'                      => __( 'Selector', '__x__' ),
  'responsive-text.compress'                      => __( 'Compress', '__x__' ),
  'responsive-text.min-size'                      => __( 'Minimum Size', '__x__' ),
  'responsive-text.max-size'                      => __( 'Maximum Size', '__x__' ),


  // Font Weights
  // ------------

  'font-weight.100'                               => __( '100 &ndash; Ultra Light', '__x__' ),
  'font-weight.100italic'                         => __( '100 &ndash; Ultra Light (Italic)', '__x__' ),
  'font-weight.200'                               => __( '200 &ndash; Light', '__x__' ),
  'font-weight.200italic'                         => __( '200 &ndash; Light (Italic)', '__x__' ),
  'font-weight.300'                               => __( '300 &ndash; Book', '__x__' ),
  'font-weight.300italic'                         => __( '300 &ndash; Book (Italic)', '__x__' ),
  'font-weight.400'                               => __( '400 &ndash; Regular', '__x__' ),
  'font-weight.400italic'                         => __( '400 &ndash; Regular (Italic)', '__x__' ),
  'font-weight.500'                               => __( '500 &ndash; Medium', '__x__' ),
  'font-weight.500italic'                         => __( '500 &ndash; Medium (Italic)', '__x__' ),
  'font-weight.600'                               => __( '600 &ndash; Semi-Bold', '__x__' ),
  'font-weight.600italic'                         => __( '600 &ndash; Semi-Bold (Italic)', '__x__' ),
  'font-weight.700'                               => __( '700 &ndash; Bold', '__x__' ),
  'font-weight.700italic'                         => __( '700 &ndash; Bold (Italic)', '__x__' ),
  'font-weight.800'                               => __( '800 &ndash; Extra Bold', '__x__' ),
  'font-weight.800italic'                         => __( '800 &ndash; Extra Bold (Italic)', '__x__' ),
  'font-weight.900'                               => __( '900 &ndash; Ultra Bold', '__x__' ),
  'font-weight.900italic'                         => __( '900 &ndash; Ultra Bold (Italic)', '__x__' ),


  // Custom Code
  // -----------

  'code-editors.custom_css_placeholder'           => __( "/*\nNo need for style tags here;\nsimply get started by writing\nCSS! Watch as your changes\nare reflected live in the\npreview area. Have fun!\n*/\n\n", '__x__' ),
  'code-editors.custom_js_placeholder'            => __( "//\n// No need to add script tags\n// here; simply get started\n// by writing JavaScript!\n// Click \"Run\" to see your\n// changes applied :)\n//\n\n", '__x__' ),


  // Choices
  // -------

  'choices.menu-named'                            => __('Menu: %s', '__x__'),
  'choices.menu-location'                         => __('Location: %s', '__x__'),

  'choices.menu-sample-default'                   => __( 'Sample', '__x__' ),
  'choices.menu-sample-no-dropdowns'              => __( 'Sample (No Dropdowns)', '__x__' ),
  'choices.menu-sample-split-1'                   => __( 'Sample (Split #1)', '__x__' ),
  'choices.menu-sample-split-2'                   => __( 'Sample (Split #2)', '__x__' ),


  // Sort
  // ----

  'sort.new-old'                                  => __( 'Newest', '__x__' ),
  'sort.old-new'                                  => __( 'Oldest', '__x__' ),
  'sort.a-z'                                      => __( 'A-Z', '__x__' ),
  'sort.z-a'                                      => __( 'Z-A', '__x__' ),
  'sort.popular'                                  => __( 'Popular', '__x__' ),


  // Actions
  // -------

  'inspect'                                       => __( 'Inspect', '__x__' ),
  'duplicate'                                     => __( 'Duplicate', '__x__' ),
  'delete'                                        => __( 'Delete', '__x__' ),
  'really-delete'                                 => __( 'Really Delete?', '__x__' ),
  'erase'                                         => __( 'Erase', '__x__' ),
  'really-erase'                                  => __( 'Really Erase?', '__x__' ),
  'manage-layout'                                 => __( 'Manage Layout', '__x__' ),


  // Errors
  // ------

  'preview-error.missing-zone.x_masthead'         => __('No suitable preview area found. This is most common when you are using a "No Header" page template. Try changing the page template, or assigning this header to a context where the template allows the header output.', '__x__'),
  'preview-error.missing-zone.x_colophon'         => __('No suitable preview area found. This is most common when you are using a "No Footer" page template. Try changing the page template, or assigning this footer to a context where the template allows the footer output.', '__x__'),
  'preview-error.missing-zone.cs_content'         => __('No suitable preview area found. This could happen when a third party plugin is overrinding the content area.', '__x__'),

  'preview-error.load.default'                    => __('The preview could not load. This is most often related to a plugin conflict or aggressive page cacheing. Checking the developer console for errors could indicate what went wrong.', '__x__'),
  'preview-error.load.https-mismatch'             => __('The preview could not load due to a http/https mismatch. Please check that HTTPS is properly configured on your site.', '__x__'),
  'preview-error.load.cross-origin'               => __('The preview could not load due to misconfigured URLs. This could happen if you are using multiple environments and the site URL was not updated after migrating.', '__x__'),
  'preview-error.load.incomplete'                 => __('The preview could not load due to the iframe response being incomplete. This is most often related to a plugin conflict, or customizations introducing a PHP error.', '__x__'),
  'preview-error.load.timeout'                    => __('The preview was unresponsive after loading. This is most often related to a plugin conflict or aggressive page cacheing.', '__x__'),

  'preview-error.loading.incomplete-html'         => __('The preview HTML did not include a closing </html> tag. It may fail to load or work properly.', '__x__'),


  // Preferences
  // -----------

  'preferences.description'                       => __('Configure how Pro should look and behave. These settings are specific to your user account.', '__x__'),
  'preferences.wp-toolbar-on'                     => __('The WordPress toolbar will be shown on next reload.', '__x__'),
  'preferences.wp-toolbar-off'                    => __('The WordPress toolbar will be hidden on next reload.', '__x__'),


  // Skeleton Mode
  // -------------

  'skeleton-item-handle'                          => __("{{type}} - {{title}}", '__x__'),


  // Dynamic Content
  // ---------------

  'dc.field'                                      => __( 'Field', '__x__'),
  'dc.title'                                      => __( 'Title', '__x__'),
  'dc.description'                                => __( 'Description', '__x__' ),
  'dc.url'                                        => __( 'URL', '__x__' ),
  'dc.meta-key'                                   => __( 'Meta Key', '__x__' ),
  'dc.meta'                                       => __( 'Meta', '__x__' ),
  'dc.key'                                        => __( 'Key', '__x__' ),
  'dc.id'                                         => __( 'ID', '__x__' ),

  'dc.group-title-post'                           => __( 'Post', '__x__' ),
  'dc.group-title-archive'                        => __( 'Archive', '__x__' ),
  'dc.group-title-global'                         => __( 'Global', '__x__' ),
  'dc.group-title-user'                           => __( 'User', '__x__' ),
  'dc.group-title-acf'                            => __( 'ACF', '__x__' ),
  'dc.group-title-toolset'                        => __( 'Toolset', '__x__' ),
  'dc.group-title-woocommerce'                    => __( 'WooCommerce', '__x__' ),

  'dc.global.site-title'                          => __( 'Site Title', '__x__' ),
  'dc.global.site-tagline'                        => __( 'Site Tagline', '__x__' ),
  'dc.global.home-url'                            => __( 'Home URL', '__x__' ),
  'dc.global.admin-url'                           => __( 'Admin URL', '__x__' ),
  'dc.global.current-date'                        => __( 'Current Date', '__x__' ),
  'dc.global.current-time'                        => __( 'Current Time', '__x__' ),

  'dc.global.display-name'                        => __( 'Display Name', '__x__' ),
  'dc.global.email-address'                       => __( 'Email Address', '__x__' ),
  'dc.global.gravatar-url'                        => __( 'Gravatar URL', '__x__' ),
  'dc.global.registration-date'                   => __( 'Registration Date', '__x__' ),
  'dc.global.registration-time'                   => __( 'Registration Time', '__x__' ),
  'dc.global.usermeta'                            => __( 'Usermeta', '__x__' ),

  'dc.wc.shop-url'                                => __( 'Shop URL', '__x__' ),
  'dc.wc.cart-url'                                => __( 'Cart URL', '__x__' ),
  'dc.wc.checkout-url'                            => __( 'Checkout URL', '__x__' ),
  'dc.wc.account-url'                             => __( 'Account URL', '__x__' ),
  'dc.wc.terms-url'                               => __( 'Terms URL', '__x__' ),
  'dc.wc.cart-item-count'                         => __( 'Cart Item Count', '__x__' ),
  'dc.wc.cart-total'                              => __( 'Cart Total', '__x__' ),
  'dc.wc.product-price'                           => __( 'Product Price', '__x__' ),


  // Global Blocks
  // -------------

  'global-blocks.entities'                        => __( 'Global Blocks', '__x__' ),
  'global-blocks.blank'                           => __( 'Click + to create your first Global Block.', '__x__' ),
  'global-blocks.no-preview-available'            => __( 'No Preview Available', '__x__' ),
  'global-blocks.click-to-edit'                   => __( 'Click {{icon}} to edit.', '__x__' ),


  // Launchpad
  // ---------

  'launchpad.content.description'                 => __( 'Design engaging layouts throughout your site.', '__x__' ),
  'launchpad.design-cloud.description'            => __( 'Premium design assets.', '__x__' ),
  'launchpad.templates.description'               => __( 'Save and reuse snapshots of content.', '__x__' ),
  'launchpad.global-blocks.description'           => __( 'Design once. Use anywhere.', '__x__' ),
  'launchpad.options.description'                 => __( 'Foundational styling for your site.', '__x__' ),


  // Regions
  // -------

  'regions.top'                                   => __( 'Top', '__x__' ),
  'regions.left'                                  => __( 'Left', '__x__' ),
  'regions.right'                                 => __( 'Right', '__x__' ),
  'regions.bottom'                                => __( 'Bottom', '__x__' ),
  'regions.footer'                                => __( 'Footer', '__x__' ),


  // History
  // -------

  'history.title'                                 => __( 'History', '__x__' ),
  'history.builder-loaded'                        => __( 'Builder Loaded', '__x__' ),
  'history.column-layout-updated'                 => __( 'Column Layout Updated', '__x__' ),
  'history.contents-deleted'                      => __( '{{context}} Contents Deleted', '__x__' ),
  'history.spacing-removed'                       => __( '{{context}} Spacing Removed', '__x__' ),
  'history.reset-style'                           => __( '{{context}} Style Reset', '__x__' ),
  'history.set-label'                             => __( '{{context}} Renamed', '__x__' ),
  'history.create-row-layout'                     => __( 'Row Layout Created', '__x__' ),


  // Pro
  // ---

  'regions.bars'                                  => __( 'Bars', '__x__' ),
  'regions.first-bar'                             => __( 'Add a Bar to get started.', '__x__' ),
  'regions.no-bars'                               => __( 'This Region has no Bars.', '__x__' ),
  'regions.single-bar'                            => __( 'This Region only supports a single Bar.', '__x__' ),
  'regions.containers'                            => __( 'Containers', '__x__' ),
  'regions.first-container'                       => __( 'Add your first Container to this Bar.', '__x__' ),
  'regions.elements'                              => __( 'Elements', '__x__' ),
  'regions.first-element'                         => __( 'Add your first Element to this Container.', '__x__' ),
  'regions.add-container'                         => __( 'Add Container', '__x__' ),
  'regions.add-element'                           => __( 'Add Element', '__x__' ),

  'launchpad.headers.description'                 => __( 'Create as many beautiful headers as you need.', '__x__' ),
  'launchpad.footers.description'                 => __( 'Finish off strong with a flexible footer design.', '__x__' ),

  'footers.template-entity'                       => __( 'Footer Template', '__x__' ),
  'headers.template-entity'                       => __( 'Header Template', '__x__' ),

);
