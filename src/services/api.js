class ApiService {

    constructor() {

    }

    async getSkills () {
        let result = await fetch(`./includes/db/loadSkills.php`)
        .then( response => {
            console.log("Skills")
            return response;
        });
    
        let status = await result.json();    
        
        return status;    
    }
    
    async getWorks() {
    
        let result = await fetch(`./includes/db/loadProjects.php`)
        .then( response => {
            return response;
        });
    
        let status = await result.json();    
        
        return status;    
        
    }

}

export default new ApiService();

