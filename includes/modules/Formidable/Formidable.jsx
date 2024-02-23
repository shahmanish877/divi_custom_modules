// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
// import './style.css';


class FDM_Formidable extends Component {

  static slug = 'fdm_formidable';

  render() {

    return (
      <div>
        <h2 className="divi_formidable_header">{this.props.heading}</h2>
        <div>
            [formidable id={this.props.formidable_id} title={this.props.title} description={this.props.description} ]
        </div>
      </div>
    );
  }
}

export default FDM_Formidable;
