import React from 'react';
import {StyleSheet, View, TextInput, Button, FlatList} from 'react-native';
import publications from '../Data/Pub_data';
import Publication from './Publication';


class Search extends React.Component {
  render() {;
    return (
      <View>
        <View style={styles.search}>
              <TextInput style={styles.textinput} placeholder='Offre, Personne, ...'/>
              <Button style={styles.button} title='Rechercher' onPress={() => {}}/>
        </View>
        <View>
            <FlatList
                data={publications}
                keyExtractor={(item) => item.id.toString()}
                renderItem={({item}) => <Publication pub={item}/>}
            />
        </View>
      </View>
    )
  }
};

const styles = StyleSheet.create({
  textinput: {
    flex: 3,
    marginLeft: 1,
    marginRight: 1,
    borderColor: '#000',
    borderWidth: 1,
    paddingLeft: 2
  },

  button: {
    // backgroundColor: '#610f91',
    color : '#111',
  },

  search: {
    marginTop: 25,
    borderWidth: 1,
    borderColor: '#fff',
    flexDirection: 'row',
    marginBottom: 25
  }
})

export default Search
