export let configuration = {
    // survey meta for information purpose
    id: 123123,
    title: "test",
    user: {
        username: "Test",
        role: "Researcher",
        package: "Basic",
    },

    // used to store created question components
    components: [],

    // used to store selected question bank
    questionBank: [],

    // used to store all deleted file stored in database
    deleted: {
        components: [],

        // deprecated
        // options: [],

        media: [],
    },

    // used to store all files for uploading
    files: [],
};
