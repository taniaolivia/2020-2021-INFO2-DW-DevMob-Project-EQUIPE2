// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.

export const environment = {
  production: false,
  ApiUrl : {
    meteo: "http://api.weatherstack.com/current?access_key=f0d547bb1141e2f1bab9859bb0268f3c&query=La%20Rochelle",
    listeBateaux: "http://localhost:9999/api/bateaux/",
    musee: "http://localhost:9999/api/musee/1"
  }
};

/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.
