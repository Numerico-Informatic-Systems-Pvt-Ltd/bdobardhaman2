SELECT CONCAT('/',id) AS 'actual_path',CONCAT('/',name) AS 'relative_path',
id,name,link,underline,widget ,widget_image
FROM menu WHERE parent_id in ('0')
UNION ALL
 # add the new fields in here
SELECT CONCAT('/',parent_id,'/',child_id) AS 'actual_path',
CONCAT('/',parent,'/',child) AS 'relative_path',
child_id AS id,child AS name,child_link AS link,underline,widget,widget_image FROM (   
 # add the new fields in here 
SELECT p.id 'parent_id' , p.name 'parent', p.rank 'parent_rank' , 
       c.id 'child_id'  , c.name 'child' , c.rank 'child_rank'  , c.link 'child_link',
       underline,widget,widget_image    
    FROM (
        SELECT parent_id,id,name,rank FROM menu WHERE parent_id in ('0')
    ) p
    JOIN
    (
        # add the new fields in here
        SELECT parent_id,id,name,rank,link,underline,widget,widget_image 
        FROM menu 
        WHERE parent_id 
        in(SELECT id FROM menu WHERE parent_id in ('0'))
    ) c
    ON p.id=c.parent_id
    ORDER BY parent_rank,child_rank) b
UNION ALL
#  add the new fields in  here
SELECT CONCAT('/',parent_id,'/',child_id,'/',sub_child_id) AS 'actual_path',
CONCAT('/',parent,'/',child,'/',sub_child) AS 'relative_path',
sub_child_id AS id,sub_child AS name,sub_child_link AS link,underline,widget,widget_image
 FROM(
# add the new fields in  here
SELECT p.parent_id ,parent,parent_rank,child_id,child,child_rank,
       c.id 'sub_child_id',c.name 'sub_child',c.rank 'sub_child_rank',
       c.link 'sub_child_link',c.underline,c.widget,c.widget_image
FROM (
    SELECT p.id 'parent_id' , p.name 'parent', p.rank 'parent_rank', 
           c.id 'child_id'  , c.name 'child' , c.rank 'child_rank' 
    FROM (
        SELECT parent_id,id,name,rank FROM menu WHERE parent_id in ('0')
    ) p
    JOIN
    (
        SELECT parent_id,id,name,rank  
        FROM menu 
        WHERE parent_id 
        in(SELECT id FROM menu WHERE parent_id in ('0'))
    ) c
    ON p.id=c.parent_id
) p
JOIN(
    # add the new fields in  here
    SELECT parent_id,id,name,rank,link,underline,widget,widget_image 
    FROM menu 
    WHERE parent_id 
    in(
        SELECT id FROM menu WHERE parent_id 
        in(
            SELECT id FROM menu WHERE parent_id in ('0')
            )
        )
) c
ON p.child_id=c.parent_id
ORDER BY parent_rank,child_rank,sub_child_rank) c