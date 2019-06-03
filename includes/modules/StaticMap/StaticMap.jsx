// External Dependencies
import React, { Component,Fragment } from 'react';

// Internal Dependencies
import './style.css';


class StaticMap extends Component {

  static slug = 'osm_static_map';

  render() {
    
    return (
      <Fragment>
        <h1>
          { this.props.title }
        </h1>
        <div id="map">
        </div>
      </Fragment>
    );
  }
}

export default StaticMap;
