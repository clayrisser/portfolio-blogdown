Reaction is a React framework loosely based on the React Starter Kit. It originally started out as a fork of the React Starter Kit. I chose to work with the React Starter Kit because of its superb support for Isomorphic React applications. At the time, the React Starter Kit had one of the most straightforward approaches to Isomorphic design.

Over the process of a year, I continued to improve the React starter kit. I started out by adding support for Sass. This support not only allowed developers add globally scoped Sass into their project but also opened the door for easily integrated style frameworks, such as Bootstrap. The next thing I added to the React Starter Kit was Redux. As I began to continue working with and understanding the React Starter Kit, I began to realize that several things were done incorrectly for my use case.

The React Starter Kit has a very tight integration with its back-end server. This approach is super if you are trying to build your back-end and front-end as one single application. However, it quickly becomes bloated when trying to separate your back-end from your front-end. I fixed this problem by cleaning out back-end features such as database connections and Graphql. My goal for Reaction was to be a straightforward and flexible front-end Isomorphic React framework.

As I continued working with my extremely modified version of the React Starter Kit, it became apparent that if I truly wanted Reaction to meet its goals, I would need to rebuild the kit from scratch.  There were significant portions of the code, especially pertaining to the build system, that I did not understand.  I recreated the React Starter Kit as Reaction, line by line, discarding what I believed to be unnecessary and adding additional functionality that enhanced the goals. I also took the liberty during this major update to build everything under ES6 classes, which greatly enhances the readability of the project.

The following shows the core differences between Reaction and the React Starter Kit.

| Reaction | React Starter Kit |
| :--- | :--- |
| - | Back-end Database |
| - | Back-end Graphql |
| Global Sass | - |
| Redux | - |
| Redux Chrome Debug Integration | - |
| Redux Integration with Routes | - |
| ES6 Classes | - |
| Unified Back-end and Front-end error reporting | - |

I guess the best way to summarize the differences between Reaction and the React Starter Kit is that Reaction is more flexible and focuses strictly on the front-end aspect of web applications. You can probably expect to see more features added to Reaction, however it will never deviate from its goal of being a straightforward and flexible front-end Isomorphic React framework.

